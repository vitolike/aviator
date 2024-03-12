/*
 * jQuery Country code picker plugin v 0.9 
 * https://github.com/fr33land/jquery-country-code-picker
 * 
 * Author: Rokas Sabaliauskas(fr33land) 
 * Email: rrokass@gmail.com 
 *  
 * Copyright 2018
 * Licensed under the MIT license. 
 * http://www.opensource.org/licenses/mit-license.php 
 */
 
(function(factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        factory(require('jquery'));
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($, window, document, undefined) {

  "use strict";

  var pluginName = "ccPicker";
  var defaults = {
    countryCode: "LT",
    dialCodeFieldName: "phoneCode",
    dataUrl: "data.json",
	countryFilter: true,
    searchPlaceHolder: "Search"	
  };


  function CcPicker(element, options) {
	var self = this;
    this.element = element;
    this.options = $.extend({}, defaults, options);
    this._defaults = defaults;
    this._name = pluginName;
    this._list = {};
	this._filter = {};
    this._ccData = {};
    this._ccPicker = {};
    this._ccDialCodeTrackerField = {};
	this._ccSelectedCountry = {};
    this.init();

    function setCountryByPhoneCode(code) {
      var cc = self.findCountryByPhoneCode(self, code);
      self._ccPicker.html(self.createCountryListItem(cc.code, cc.phoneCode));
	  self._ccDialCodeTrackerField.val(cc.phoneCode);
	  self._ccSelectedCountry = {code: cc.code, phoneCode: cc.phoneCode};
	  $(self.element).trigger("countrySelect", cc);
    }

    function setCountryByCode(code) {
      var cc = self.findCountryByCountryCode(self, code);
      self._ccPicker.html(self.createCountryListItem(cc.code, cc.phoneCode));
	  self._ccDialCodeTrackerField.val(cc.phoneCode);
	  self._ccSelectedCountry = {code: cc.code, phoneCode: cc.phoneCode};
	  $(self.element).trigger("countrySelect", cc);
    }
	  
   function disable() {
      $(self.element).prop('disabled', true);
      self._ccPicker.off("click");
      self._ccPicker.css("cursor", "default");
    }

    function enable() {
      $(self.element).prop('disabled', false);
      self._ccPicker.off("click");
      self._ccPicker.on("click", function (e) {
        $.isEmptyObject(self._list) ? self.createCountryList(self) : self.destroyCountryList(self);
        e.stopPropagation();
      });
      self._ccPicker.css("cursor", "pointer");
    }

    return {
      setCountryByPhoneCode: setCountryByPhoneCode,
      setCountryByCode: setCountryByCode,
      disable: disable,
      enable: enable
    };
  }

  $.extend(CcPicker.prototype, {
    init: function () {
      var c = this;
      this.loadCountryData(c);
      var cc = this.findCountryByCountryCode(c, this.options.countryCode);
      this._ccPicker = $('<div class="cc-picker cc-picker-code-select-enabled">').insertBefore(this.element);
      this._ccDialCodeTrackerField = $('<input>').attr({
        type: 'hidden',
        id: this.element.id + "_" + this.options.dialCodeFieldName,
        name: this.element.name + "_" + this.options.dialCodeFieldName,
        value: cc.phoneCode
      }).insertAfter(this.element);
      this._ccPicker.prepend(this.createCountryListItem(this.options.countryCode.toLowerCase(), cc.phoneCode));
	  this._ccSelectedCountry = {code: this.options.countryCode.toLowerCase(), phoneCode: cc.phoneCode};
      this._ccPicker.on("click", function (e) {
        $.isEmptyObject(c._list) ? c.createCountryList(c) : c.destroyCountryList(c);
	e.stopPropagation();
      });
	$("body").on("click", function () {
        if (!$.isEmptyObject(c._list)) {
          c.destroyCountryList(c);
        }
      });
    },
    loadCountryData: function (e) {
       $.ajax({
        dataType: 'json',
        url: e.options.dataUrl,
		type: 'get',
        async: false,
        success: function (data) {
          e._ccData = data;
        }
      }); 
	  
    },
    findCountryByPhoneCode: function (e, code) {
      return $.grep(e._ccData, function (o) {
        return o.phoneCode.toUpperCase() === code.toUpperCase();
      })[0];
    },
    findCountryByCountryCode: function (e, code) {
      return $.grep(e._ccData, function (o) {
        return o.code.toUpperCase() === code.toUpperCase();
      })[0];
    },
    createCountryList: function (e) {
      var zIndex = e._ccPicker.css("z-index") === "auto" ? 0 : Number(e._ccPicker.css("z-index")) + 10;
      e._list = $("<ul/>", {"class": "cc-picker-code-list"}).appendTo("body");
      e._list.css({
        top: e._ccPicker.offset().top + e._ccPicker.outerHeight() + (e.options.countryFilter === true ? 25 : 0),
        left: e._ccPicker.offset().left,
        "z-index": zIndex
      });
      $.each(e._ccData, function (key, val) {
        var l = $("<li>", {text: val.countryName}).appendTo(e._list);
        $(l).data("countryItem", val);
        $(l).prepend(e.createCountryListItem(val.code, val.phoneCode));
        $(l).on("click", function () {
          e.selectCountry(e, $(this));
          e.destroyCountryList(e);
        });
		if(val.phoneCode === e._ccSelectedCountry.phoneCode){
			$(l).addClass("cc-picker-selected-country");
		}
      });

	  if (e.options.countryFilter) {
        e._filter = $("<input/>", {"class": "cc-picker-code-filter", "placeholder": e.options.searchPlaceHolder}).insertBefore(e._list);
        e._filter.css({
          top: e._ccPicker.offset().top + e._ccPicker.outerHeight(),
          left: e._ccPicker.offset().left,
          "z-index": zIndex
        });
        e._filter.on("click", function (e) {
          e.stopPropagation();
        });
        e._filter.on("keyup", function (e) {
          var text = $(this).val();
          $('.cc-picker-code-list li:not(:ccContains("' + text + '"))').hide();
          $('.cc-picker-code-list li:ccContains("' + text + '")').show();
        });
      }
    },
    destroyCountryList: function (e) {
      e._list.remove();
      e._list = {};
	  
	  if (e.options.countryFilter) {
        e._filter.remove();
        e._filter = {};
      }
    },
    selectCountry: function (e, c) {
      var i = $(c).data("countryItem");
	  this._ccSelectedCountry = i;
      e._ccPicker.html(e.createCountryListItem(i.code, i.phoneCode));
      e._ccDialCodeTrackerField.val(i.phoneCode, i.code, i.phoneCode);
	  $(e.element).trigger("countrySelect", i);
    },
    createCountryListItem: function (countryCode, dialCode) {
      return '<div class="cc-picker-flag ' + countryCode.toLowerCase() + '"></div><span class="cc-picker-code">' + dialCode + '</span> ';
    }
  });

   $.extend($.expr[":"], {
    ccContains: function (a, i, m) {
      return $(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    }
  });
   
  $.fn.CcPicker = function (options) {
    if (typeof arguments[0] === 'string') {
      var methodName = arguments[0];
      var args = Array.prototype.slice.call(arguments, 1);
      var returnVal;
      this.each(function () {
        if ($.data(this, 'plugin_' + pluginName) && typeof $.data(this, 'plugin_' + pluginName)[methodName] === 'function') {
          returnVal = $.data(this, 'plugin_' + pluginName)[methodName].apply(this, args);
        } else {
          throw new Error('Method ' + methodName + ' does not exist on jQuery.' + pluginName);
        }
      });
      if (returnVal !== undefined) {
        return returnVal;
      } else {
        return this;
      }
    } else if (typeof options === "object" || !options) {
      return this.each(function () {
        if (!$.data(this, 'plugin_' + pluginName)) {
          $.data(this, 'plugin_' + pluginName, new CcPicker(this, options));
        }
      });
    }
  };

}));
