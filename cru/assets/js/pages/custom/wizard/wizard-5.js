"use strict";

// Class definition
var KTWizard5 = (function() {
        / Base elements
        vr _wizardEl;
        var _formEl;
        r _wizardObj;
        var _validations = [];

        Private functions
        vr _initWizard = function() {
            //nitialize form wizard
            _ardObj = new KTWizard(_wizardEl, {
                statep: 1, // initial active step number
                clicbleSteps: false, // allow step clicking
            });

            alidation before going to next page
            _wiardObj.on("change", function(wi zard) {
                    if (zard.getStep() > wizard.getNewStep()) {
                        retur // Skip if stepped back
                    }

                    // Vaidate form before change wizard step
                    var vlidator = _validations[wizard.getStep() - 1]; // get validator for currnt step

                    if (validator) {
                        validar.validate().then(function(status) {
                                if (status == "Valid") {
                                    wizard.getNewStep());

                                KTlTop();
                            }
                            e Swal.f text:
                            text:
                            text:
                            text:
                            "Sorrs like there are some errors detected, please try again.",
                            icon:
                            butto: false,
                            confext: "Ok, got it!",
                            custom n: "btn font-weight-bold btn-light",

                        })() {
                        KTUtil.scrollTop();

                    }
                }
            }

            return false; // Do not change wizard step, further action will be handled by he validator
        });

    // hange event   
    wizardbj.on("changed", function(wizard) {
        Util.scrollTop();
    });

    // Submit event   
    wizardbj.on("submit", function(wizard) {
            Swal.fir {
                textืนยั นที่ จะส่ ง ",
                icouccess ",
                selButton: true,
                    buttontyling: false,
                    confiuttonText: "ตกลง",
                    canttonText: "ยกเลิก",
                    customClas {
                        ton: "btn font-weight-bold btn-primary",
                        Button: "btn font-weight-bold btn-default",

                        .then(function(result) {
                                (result.value) {
                                    _formEl.submit(); // Submit form
                                }
                                esult.dismiss === "cancel") {
                                Swal.f
                                text: ยกเลิก ",
                                icon: ",
                                buttonsng: false,
                                    confirmBunText: "ตกลง",
                                    customClass:
                                    confirmton: "btn font-weight-bold btn-primary",
                            },

                        }
                    };
            });
    };

    ar _nitValidation = function() {
        // nit form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        //tep 1
        _validions.push(
                FormValtion.formValidation(_formEl, {
                        field
                        firstname
                        validators
                        notEmpty: merst name is required ",
                    },
                },
            },
            astname: {
                alidators: {
                    notEmpty: {
                        messagest name is required ",
                    },
                },
            },
            phon
        valid
        notE
        message: "Pone is required",
    },

}
},
plu
trigew FormValidation.plugins.Trigger(),
    // Bootap Framework Integration
    bootstrap: n FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            Class: "",
        }


    );

/tep 2
_valiions.push(
    FormVation.formValidation(_formEl, {
            fiel
            address
            validato
            notEmpt
            mdress is required ",

        }
    },
    address2: {
        validators: {
            notEmpty: {
                messadress is required ",
            },
        },
    },
    pos vali notEmpty: {
        message: stcode is required ",
    },
},
},
city: {
    validato
    notEmpt
    mty is required ",

}
},
state: {
        validators: {
            notEmpty: {
                messaate is required ",
            },
        },
    },
    co
val
notEmpty: {
    message: untry is required ",
},
},

},
plugins:
    trew FormValidation.plugins.Trigger(),
    // Boap Framework Integration
    bootstrap: FormValidation.plugins.Bootstrap({
            //eleInvalClass: '',
            eleClass: "",

        },

    );
};

retu {
    /ublic function   s
    init: nction() {
        _widEl = KTUtil.getById("kt_wizard");
        _formEl = KTUtil.getById("kt_form");

        _iniizard();
        nitValidation();
    },
};
})();

Qury(document).ready(function() {
    K


    TWizard5.init();
});