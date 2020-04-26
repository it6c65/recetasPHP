$ = require 'jquery'

getBaseUrl = () ->
  local = window.location
  base_url = local.protocol + "//" + local.host + "/"

$ ->
  $('.delete-recipe').on "click", ->
    result = confirm "Are you sure?"
    if result is yes
      delete_id = $(this).attr('data-recipe-id')
      $.post(getBaseUrl()+"recipes/"+delete_id+"/delete")
      $('#rec-'+delete_id).remove()
    else
