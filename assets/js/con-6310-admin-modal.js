jQuery(document).ready(function () {
  //Preview page Create New Start
  jQuery("body").on("click", ".con_6310_choosen_style", function () {
    jQuery("#con-6310-modal-add").fadeIn(500);
    jQuery("#con-6310-style-hidden").val(jQuery(this).attr("id"));
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });
  //Preview page Create New End

  //Add/Edit items start
  jQuery("body").on("click", "#con-6310-add-or-edit-items", function () {
    jQuery("#con-6310-add-or-edit-items-modal").fadeIn(500);
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });
  jQuery("body").on("click", ".con-6310-row-select-checkbox", function (event) {
    event.stopPropagation();
  });
  jQuery("body").on("click", ".con-6310-row-select", function () {
    var id = jQuery(this).attr("id");
    if (jQuery("#chk-box-" + id).prop("checked") == true) {
      jQuery("#chk-box-" + id).prop("checked", false);
      return false;
    } else {
      jQuery("#chk-box-" + id).prop("checked", true);
      return true;
    }
  });
  //Add/Edit items End

  //Rearrange items start
  jQuery("body").on("click", "#con-6310-rearrange-items", function () {
    jQuery("#con-6310-rearrange-items-modal").fadeIn(500);
    jQuery("input[name='order_type']:checked").val() == "1" ||
    jQuery("input[name='order_type']:checked").val() == 1
      ? jQuery("#con-6310-sortable-items").hide()
      : jQuery("#con-6310-sortable-items").show();
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });

  jQuery("#con-6310-sortable-items").sortable();
  jQuery("#con-6310-sortable-items").disableSelection();
  jQuery("#con-6310-sortable-sub").click(function () {
    var list_sortable = jQuery("#con-6310-sortable-items")
      .sortable("toArray")
      .toString();
    jQuery("#rearrange_items_list").val(list_sortable);
  });

  jQuery("body").on("change", "input[name='order_type']", function () {
    jQuery(this).val() == "1" || jQuery(this).val() == 1
      ? jQuery("#con-6310-sortable-items").hide()
      : jQuery("#con-6310-sortable-items").show();
  });
  //Rearrange items end

  //Close Modal Script
  jQuery("body").on(
    "click",
    ".con-6310-close, .con-6310-btn-danger",
    function () {
      jQuery(`
            #con-6310-modal-add, 
            #con-6310-add-or-edit-items-modal,
            #con-6310-rearrange-items-modal
          `).fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  );
  jQuery(window).click(function (event) {
    if (
      event.target == document.getElementById("con-6310-modal-add") ||
      event.target ==
        document.getElementById("con-6310-add-or-edit-items-modal") ||
      event.target == document.getElementById("con-6310-rearrange-items-modal")
    ) {
      jQuery(`
              #con-6310-modal-add, 
              #con-6310-add-or-edit-items-modal,
              #con-6310-rearrange-items-modal
            `).fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  });
});
