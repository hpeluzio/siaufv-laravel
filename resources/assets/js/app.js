/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'))

const app = new Vue({
  el: '#app'
})

$(function () {
  $('.decimal').mask('000.000.000.000.000,00', {reverse: true})
  var today = new Date()

  var dd = today.getDate()
  var mm = today.getMonth() + 1
  var yyyy = today.getFullYear()

  if (dd < 10) dd = '0' + dd
  if (mm < 10) mm = '0' + mm

  today = yyyy + '-' + mm + '-' + dd
  $('input[type="date"]').val(today)
})