$(document).ready(function() {
    let data = null;

    $('.buy-btn').click(function() {
        var coffeeId = $(this).data('coffee-id');
        console.log(coffeeId);
        data = coffeeId;
        console.log($('#boyCoffeeModal').val('coffee-id', coffeeId));
      $('#buyCoffeeModal').data('coffee-id', coffeeId);
      $('#buyCoffeeModal').modal('show');
    });

    $('.confirm-buy-btn').click(function() {
        console.log(data);
        cofid = {dataCof: data};
        console.log(cofid);
        $('#buyCoffeeForm').val(cofid);
        $('#buyCoffeeForm').submit();
    });
});
