$.extend({ alert: function (message, title) {
  $("<div></div>").dialog( {
    buttons: { "Ok": function () { $(this).dialog("close"); } },
    close: function (event, ui) { $(this).remove(); },
    resizable: false,
    draggable: false,
    title: title,
    position: { my: "center", at: "center",of:$("body") },
    modal: true
  }).text(message);
}
});






