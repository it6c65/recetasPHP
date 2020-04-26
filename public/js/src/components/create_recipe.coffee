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
