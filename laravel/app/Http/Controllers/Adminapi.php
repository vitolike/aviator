<?php

namespace App\Http\Controllers;

use App\Models\Bankdetail;
use App\Models\Bank_detail;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Hash;
use Illuminate\Http\Request;

class Adminapi extends Controller
{
    public function changepassword(Request $r)
    {
        $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Invalid Credential!");
        $validated = $r->validate([
            'userid' => 'required',
            'newpassword' => 'required',
            'renewpassword' => 'required',
        ]);
        if ($r->newpassword == $r->renewpassword) {
            User::where('id', $r->userid)->where('isadmin', '1')->update([
                "password" => Hash::make($r->newpassword),
            ]);
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "Password successfully updated!");
        } else {
            $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Password not match!");
        }
        return response()->json($response);
    }
    public function edituser(Request $r)
    {
        $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Invalid Credential!");
        $validated = $r->validate([
            'userid' => 'required',
            'newpassword' => 'required',
            'renewpassword' => 'required',
        ]);
        if ($r->newpassword == $r->renewpassword) {
            User::where('id', $r->userid)->where('isadmin', '1')->update([
                "password" => Hash::make($r->newpassword),
            ]);
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "Password successfully updated!");
        } else {
            $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Password not match!");
        }
        return response()->json($response);
    }
    public function rechargeapproval($event, Request $r)
    {
        $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Invalid Action!");
        $id = $r->id;
        $userid = $r->userid;
        $amount = $r->amount;
        if ($event == 'success') {
            $firstrecharge = Transaction::where('id', $userid)->where('category', 'recharge')->where('status','0')->get();
            if (count($firstrecharge) == 0) {
                $level1 = User::where('id', user('promocode', $userid))->first();
                if ($level1) {
                    $level1amount = ($amount / 100 ) * setting('level1commission');
                    // return $level1amount;
                    addwallet($level1->id, $level1amount);
                    addtransaction($level1->id, 'Level', date("ydmhsi"), 'credit', $level1amount, 'Level_bonus', 'Success', '1');

                    $level2 = User::where('id', $level1->promocode)->first();
                    if ($level2) {
                        $level2amount = ($amount / setting('level2commission')) * 100;
                        addwallet($level2->id, $level2amount);
                        addtransaction($level2->id, 'Level', date("ydmhsi"), 'credit', $level2amount, 'Level_bonus', 'Success', '1');

                        $level3 = User::where('id', $level2->promocode)->first();
                        if ($level3) {
                            $level3amount = ($amount / setting('level3commission')) * 100;
                            addwallet($level3->id, $level3amount);
                            addtransaction($level3->id, 'Level', date("ydmhsi"), 'credit', $level3amount, 'Level_bonus', 'Success', '1');
                        }
                    }
                }
            }
            $data = Transaction::where('id', $id)->update([
                "remark" => 'Success',
                "status" => '1',
            ]);
            addwallet($userid, $amount);
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "Recharge successfully updated!");

        } elseif ($event == 'cancel') {
            $data = Transaction::where('id', $id)->update([
                "remark" => 'Cancle payment due to some issue',
                "status" => '2',
            ]);
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "Recharge successfully updated!");
        }
        return response()->json($response);
    }
    public function withdrawalapproval($event, Request $r)
    {
        $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Invalid Action!");
        $id = $r->id;
        $userid = $r->userid;
        $amount = $r->amount;
        if ($event == 'success') {
            $data = Transaction::where('id', $id)->update([
                "transactionno" => 'doltedaviator' . date("dmyhis"),
                "remark" => 'Success',
                "status" => '1',
            ]);
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "Withdrawal successfully updated!");
        } elseif ($event == 'cancel') {
            $data = Transaction::where('id', $id)->update([
                "remark" => 'Cancle payment due to some issue',
                "status" => '2',
            ]);
            addwallet($userid, $amount);
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "Withdrawal successfully updated!");
        }
        return response()->json($response);
    }
    public function userdelete(Request $r)
    {
        $response = array('status' => 0, 'title' => "Oops!!", 'message' => "Invalid Action!");
        $id = $r->id;
        User::where('id', $id)->delete();
        Wallet::where('userid', $id)->delete();
        Transaction::where('userid', $id)->delete();
        $response = array('status' => 1, 'title' => "Success!!", 'message' => "User successfully Deleted!");
        return response()->json($response);
    }
    public function payment_gateway(Request $r)
    {
        $status = false;
        $message = "Something went wrong!";
        $detail = Bankdetail::where('id', '1')->first();
        if ($detail) {
            $status = true;
            $data = array(
                'user_name' => $detail->account_holder_name,
                'mobile_no' => $detail->mobile_no,
                'upi_id' => $detail->upi_id,
                'account_number' => $detail->account_no,
                'ifsc_code' => $detail->ifsc_code,
                'bank_name' => $detail->bank_name,
                'barcode' => $detail->barcode,
            );
            $message = "";

        } else {
            $status = false;
            $data = array();
            $message = "Something wents wrong!";
        }
        $response = array("isSuccess" => $status, "data" => $data, "message" => $message);
        return response()->json($response);
    }

    public function editamountsetup(Request $r)
    {
        $response = array('status' => 0, 'title' => "Error!!", 'message' => "Something wents wrong!");
        $update = Setting::where('id', $r->id)->update([
            "category" => $r->settingname,
            "value" => $r->value,
        ]);
        if ($update) {
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "User successfully Deleted!");
        }
        return response()->json($response);
    }

    public function editbankdetail(Request $r)
    {
        // return $r->all();
        $response = array('status' => 0, 'title' => "Error!!", 'message' => "Something wents wrong!");
        $exist = Bankdetail::where('id', '1')->first();
        if ($exist) {
            if ($r->file('barcode') != '') {
                $barcode = imageupload($r->file('barcode'), 'barcode', 'admin/bankdetail/')['filePath'];
            } else {
                $barcode = $exist->barcode;
            }
        }
        $update = Bankdetail::where('id', '1')->update([
            "account_holder_name" => $r->holdername,
            "mobile_no" => $r->mobile_no,
            "upi_id" => $r->upi_id,
            "account_no" => $r->account_no,
            "ifsc_code" => $r->ifsccode,
            "bank_name" => $r->bank_name,
            "barcode" => $barcode,
        ]);
        if ($update) {
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "User successfully Deleted!");
        }
        return response()->json($response);
    }
    public function updatewallet(Request $r)
    {
        $userid = $r->userid;
        $amount = $r->amount;
        $response = array('status' => 0, 'title' => "Error!!", 'message' => "Something wents wrong!");
        $update = Wallet::where('userid', $userid)->update([
            "amount" => $amount,
        ]);
        if ($update) {
            $response = array('status' => 1, 'title' => "Success!!", 'message' => "User Wallet successfully Updated!");
        }
        return response()->json($response);
    }

    public function depositNow(Request $r)
    {
        $trn = new Transaction;
        $trn->userid = user('id');
        $trn->platform = platform($r->payment_gateway_type);
        $trn->transactionno = $r->trn;
        $trn->type = 'credit';
        $trn->amount = $r->amount;
        $trn->category = 'recharge';
        $trn->remark = 'Processing';
        $trn->status = '0';
        if ($trn->save()) {
            return redirect('/deposit?msg=Success');
        }
    }
    public function withdrawal_query(Request $r)
    {
        // return $r->all();
        $trn = new Transaction;
        $trn->userid = user('id');
        $trn->platform = platform($r->payment_gateway_type);
        $trn->transactionno = '';
        $trn->type = 'debit';
        $trn->amount = $r->amount;
        $trn->category = 'withdraw';
        $trn->remark = 'Processing';
        $trn->status = '0';
        if ($trn->save()) {
            if (wallet(user('id'), 'num') > $r->amount) {
                addwallet(user('id'), $r->amount, '-');
            }
            $existbank = Bank_detail::where('userid', user('id'))->orderBy('id', 'desc')->first();
            if ($existbank) {
                Bank_detail::where('userid', user('id'))->update([
                    "bankname" => $r->bank_name,
                    "accountno" => $r->account_no,
                    "ifsccode" => $r->ifsc_code,
                    "upi_id" => $r->upi_id,
                    "mobile_no" => $r->mobile,
                ]);
                return redirect('/withdraw?msg=Success');
            } else {
                $bank = new Bank_detail;
                $bank->userid = user('id');
                $bank->bankname = $r->bank_name;
                $bank->accountno = $r->account_no;
                $bank->ifsccode = $r->ifsc_code;
                $bank->upi_id = $r->upi_id;
                $bank->mobile_no = $r->mobile;
                if ($bank->save()) {
                    return redirect('/withdraw?msg=Success');
                }
                return redirect('/withdraw?msg=error');
            }
        }
    }
}
