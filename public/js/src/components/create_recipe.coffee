$ = require 'jquery'
ingredientStorage = window.localStorage

getBaseUrl = () ->
  local = window.location
  base_url = local.protocol + "//" + local.host + "/"

if window.location isnt getBaseUrl()+"recipes/new"
  ingredientStorage.clear();

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
    e.preventDefault()
    number = ingredientStorage.getItem('number')
    $('#list_ingredients').append(
      "
        <div class='row py-3 px-5' id='ing-#{number}' class='ingredients'>
          <input type='text' placeholder='Nombre' name='ingredients[name][]' class='form-control col-md-5' required />
          <input type='number' placeholder='Cantidad' name='ingredients[quantity][]' class='form-control offset-md-1 col-md-5' required />
          <a class='btn delete-ing'><i class='fas fa-times fa-2x'></i></a>
        </div>
      "
    )
    $('a.btn.delete-ing').click (e) ->
      e.preventDefault()
      $("#ing-#{number}").remove()
    ingredientStorage.setItem('number', String (Number(number) + 1))

$('.editing-delete-ing').on "click", ->
  result = confirm "Are you sure?"
  if result is yes
    delete_id = $(this).attr('data-ingred-id')
    $("#ing-"+delete_id).remove()
  else
