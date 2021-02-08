// // Asynchronous filtering by input's id and by php's filename
// function filtering(id, filename) {
//   $(id).on("keyup", function () {
//     const text = $(this).val();
//     if (text !== '') {
//       // Hide base table tag
//       $('.table-idle').hide()
//       $.ajax({
//         url: filename,
//         method: "post",
//         data: {search: text},
//         dataType: "text",
//         success: function (data) {
//           $('#result').html(data);
//         }
//       });
//     } else {
//       $('.table-idle').show()
//       $('#result').html('');
//     }
//   });
// }

// Asynchronous filtering by input's id and by php's filename
function filterByLastName(id, filename) {
  $('.nom, .prenom, .ville').hide()

  $(id).on("keyup", function () {
    const text = $(this).val();
    if (text !== '') {
      // Hide base table tag
      $('.table-idle').hide()
      $.ajax({
        url: filename,
        method: "post",
        data: {lastname: text},
        dataType: "text",
        success: function (data) {
          $('#result').html(data);
        }
      });
    } else {
      $('.table-idle').show()
      $('#result').html('');
    }
  });
}

function filterByFirstName(id, filename) {
  $('.nom, .prenom, .ville').hide()

  $(id).on("keyup", function () {
    const text = $(this).val();
    if (text !== '') {
      // Hide base table tag
      $('.table-idle').hide()
      $.ajax({
        url: filename,
        method: "post",
        data: {firstname: text},
        dataType: "text",
        success: function (data) {
          $('#result').html(data);
        }
      });
    } else {
      $('.table-idle').show()
      $('#result').html('');
    }
  });
}

/**
 * Filter by city
 * @param id : id of the concerned input tag
 * @param filename : PHP file where the SQL query is processed
 */
function filterByCity(id, filename) {
  $('.nom, .prenom, .ville').hide()

  $(id).on("keyup", function () {
    const text = $(this).val();
    if (text !== '') {
      // Hide base table tag
      $('.table-idle').hide()
      $.ajax({
        url: filename,
        method: "post",
        data: {city: text},
        dataType: "text",
        success: function (data) {
          $('#result').html(data);
        }
      });
    } else {
      $('.table-idle').show()
      $('#result').html('');
    }
  });
}

// Get select option's value
function getOptionValue(val) {
  if (val === 'Oui') {
    $('.table-idle').hide()
    // Execute SQL query
    $.ajax({
      url: 'processing/fetchPresence.php',
      method: "post",
      data: {presence: val},
      dataType: "text",
      success: function (data) {
        // Render results of SQL query
        $('#result').html(data);
      }
    });
  } else if (val === 'Non') {
    $('.presence').hide()
    $('.table-idle').show()
    $.ajax({
      // Re-render the DOM
      url: 'index.php',
    });
  }
}

$(document).ready(function () {
  filterByLastName('#search_lastname', 'processing/fetchLastNames.php');
  filterByFirstName('#search_firstname', 'processing/fetchFirstNames.php');
  filterByCity('#search_city', 'processing/fetchCities.php');

  $('.db-ok').delay(3000).slideUp('slow');

  // Tooltipster library
  $('.tooltipster').tooltipster({
    animation: 'fade',
    delay: 200,
    trigger: 'hover',
    side: ['left'],
    distance: 25
  });

  // When DOM changes it fixes the Tooltipster behavior
  $('body').on('mouseenter', '.tooltipster:not(.tooltipstered)', function() {
    console.log(this)
    $(this)
      .tooltipster({ animation: 'fade',
        delay: 200,
        trigger: 'hover',
        side: ['left'],
        distance: 25 })
      .tooltipster('open');
  });
});