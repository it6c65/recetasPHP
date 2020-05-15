$ = require 'jquery'

$ ->
  $('#estimated_type_create').on "change", ->
    types = $('#estimated_type_create').val()
    if types is 'second'
      $('#time_estimated').attr("max","60")
    else if types is 'hour'
      $('#time_estimated').attr("max","24")
    else if types is 'day'
      $('#time_estimated').attr("max","7")
    else if types is 'week'
      $('#time_estimated').attr("max","4")
    else if types is 'month'
      $('#time_estimated').attr("max","12")
    else
      alert "There is a error!"

$ ->
  $('#add_ing').on "click", (e) ->
    e.preventDefault();
    number = $('.ingredients').length
    $('#list_ingredients').append(
      "
        <div class='row py-3 px-5' id='ing-#{number}' class='ingredients'>
          <input type='text' placeholder='Nombre' name='ingredients[name]' class='form-control col-md-5' />
          <input type='number' placeholder='Cantidad' name='ingredients[quantity]' class='form-control offset-md-1 col-md-5' />
          <a class='btn delete-ing'><i class='fas fa-times fa-2x'></i></a>
        </div>
      "
    )
    $('a.btn.delete-ing').click (e, id) ->
      e.preventDefault()
      $("#ing-#{number}").remove()
