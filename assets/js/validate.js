$("#mail-form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
        "menu_121": {
            required: true,
        },
        "your_name":{
            required: true,
        },
        "your_kana":{
            required: true,
        },
        "tel_152":{
            required: true,
        },
        "menu_210":{
            required: true,
        },
        "menu_209":{
            required: true,
        },
        "menu_208":{
            required: true,
        },
        "menu_207":{
            required: true,
        },
        "text_258":{
            required: true,
        },
        "email_248":{
            required: true,
            email: true
        },
        "company":{
            required: true,
        },
        "tel_company":{
            required: true,
        },
        "company_adress":{
            required: true,
        },
        "menu_015":{
            required: true,
        },
        "menu_014":{
            required: true,
        },
        "menu_013":{
            required: true,
        },
        "menu_012":{
            required: true,
        },
        "kikyu_name":{
            required: true,
        },
        "kankei":{
            required: true,
        },
        "tel_kinkyu":{
            required: true,
        },
        "other":{
            required: true,
        },
        "after":{
            required: true,
        }
    },
    messages: {
        "menu_121": {
            required: "※こちらの項目が未入力になります",
        },
        "your_name":{
            required: "※こちらの項目が未入力になります",
        },
        "your_kana":{
            required: "※こちらの項目が未入力になります",
        },
        "tel_152":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_210":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_209":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_208":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_207":{
            required: "※こちらの項目が未入力になります",
        },
        "text_258":{
            required: "※こちらの項目が未入力になります",
        },
        "email_248":{
            required: "※こちらの項目が未入力になります",
            email: "入力されたメールアドレスに間違いがあります。",
        },
        "company":{
            required: "※こちらの項目が未入力になります",
        },
        "tel_company":{
            required: "※こちらの項目が未入力になります",
        },
        "company_adress":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_015":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_014":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_013":{
            required: "※こちらの項目が未入力になります",
        },
        "menu_012":{
            required: "※こちらの項目が未入力になります",
        },
        "kikyu_name":{
            required: "※こちらの項目が未入力になります",
        },
        "kankei":{
            required: "※こちらの項目が未入力になります",
        },
        "tel_kinkyu":{
            required: "※こちらの項目が未入力になります",
        },
        "other":{
            required: "※こちらの項目が未入力になります",
        },
        "after":{
            required: "※こちらの項目が未入力になります",
        }
    },
    groups: {
        birthday: "menu_210 menu_209 menu_208"
    },
    errorPlacement: function(error, element) {
        var name = element.prop("name");
        if (name === "menu_209" || name === "menu_208" || name === "menu_210") {
            error.insertAfter("select[name='year']");
        } else {
            error.insertAfter(element);
        }
    },
    errorPlacement: function(error, element) {
        error.insertAfter(element);
        $("input").addClass('no-height');
    },
    submitHandler: function(form) {
        $("body").addClass("loading");
        form.submit();
        }
    });

// $.validator.addMethod(
//     "regex",
//     function(value, element, regexp) {
//       var re = new RegExp(regexp);
//       return this.optional(element) || re.test(value);
//     },
//     "Please check your input."
//   );