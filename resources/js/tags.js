(function (window, document) {

    let fields = Array.prototype.slice.call(
        document.querySelectorAll('select[data-provides="anomaly.field_type.multiple"]')
    );
    fields.forEach(function (field) {
        console.log(field.getAttribute('data-searchResultLimit'));
        new Choices(field, {
            removeItemButton: true,
            searchResultLimit: field.getAttribute('data-searchResultLimit')
        });
    });
})(window, document);
