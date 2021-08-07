$("a.delete").on("click", function(e) {
  e.preventDefault();

  if (confirm("Are you sure?")) {
    let frm = $("<form>");
    frm.attr('method', 'post');
    frm.attr('action', $(this).attr('href'));
    frm.appendTo("body");
    frm.submit();
  }
});

$.validator.addMethod("dateTime", function(value, element) {
  return (value == "") || !NaN(Date.parse(value));
}, "Must be a valid date and time");

$("#formArticle").validate({
  rules: {
    title: {
      required: true
    },
    content: {
      required: true
    },
    published_at: {
      dateTime: true
    }
  }
});

$("button.publish").on("click", function(e) {
  const id = $(this).data('id');
  const button = $(this);

  $.ajax({
    url: '/admin/publish-article.php',
    type: 'POST',
    data: {id: id}
  })
  .done(function(data) {
    button.parent().html(data);
  })
  .fail(function(data) {
    alert("An error occured");
  });
});

$('#published_at').datetimepicker({
  format:'Y-m-d H:i:s'
});

$('#formContact').validate({
  rules: {
    email: {
      required: true,
      email: true
    },
    subject: {
      required: true
    },
    message: {
      required: true
    }
  }
});
