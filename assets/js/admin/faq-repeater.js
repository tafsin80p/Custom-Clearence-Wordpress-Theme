jQuery(document).ready(function($) {
    // Add item
    $(document).on('click', '.add-repeater-item', function() {
        var repeater = $(this).closest('.repeater');
        var newItem = repeater.find('.repeater-item-template').clone();
        newItem.removeClass('repeater-item-template').addClass('repeater-item');
        newItem.find('input, textarea').val('');
        repeater.find('.repeater-items').append(newItem);
        updateRepeaterValue(repeater);
    });

    // Remove item
    $(document).on('click', '.remove-repeater-item', function() {
        $(this).closest('.repeater-item').remove();
        var repeater = $(this).closest('.repeater');
        updateRepeaterValue(repeater);
    });

    // Update hidden input on change
    $(document).on('change keyup', '.repeater-item input, .repeater-item textarea', function() {
        var repeater = $(this).closest('.repeater');
        updateRepeaterValue(repeater);
    });

    function updateRepeaterValue(repeater) {
        var values = [];
        repeater.find('.repeater-item').each(function() {
            var item = {};
            $(this).find('input, textarea').each(function() {
                item[$(this).data('field')] = $(this).val();
            });
            values.push(item);
        });
        repeater.find('.repeater-val').val(JSON.stringify(values));
    }
});
