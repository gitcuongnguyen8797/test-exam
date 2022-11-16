$(document).ready(function() {
    customSelect('.gender', setValueGender);
    customSelect('.payment', setValuePayment);
    dateTimePicker();
    validateSubmitForm();
});

const setValueGender = (value) => $('input[name="gender"]').val(value ?? 0);
const setValuePayment = (value) => $('input[name="payment_method"]').val(value ?? 0);

const customSelect = (className, callback, defaultValue = 0) => {  
    // default value 
    callback(defaultValue);

    const rootEl = $(`${className}`);
    const removeClass = () => rootEl.removeClass('selected');

    rootEl.click((e) => {
        // Remove class first
        removeClass()
        const el = $(e.currentTarget)
        el.addClass('selected')
        callback(el.data('value'));
    });
}

const dateTimePicker = () => {
    $('input[name="expired_month"]').datepicker({
        format: "MM",
        startView: "months", 
        minViewMode: "months"
    });

    $('input[name="expired_year"]').datepicker({
        format: "yyyy",
        startView: "years", 
        minViewMode: "years"
    });
}


const validateSubmitForm = () => {
    // Check in the first time
    const isChecked = () => $('input[name="term_accepted"]').is(':checked');
    $('#btn-submit').prop('disabled', !isChecked());

    // Listen on Change
    $('input[name="term_accepted"]').change(() => {
        $('#btn-submit').prop('disabled', !isChecked());
    });
}

