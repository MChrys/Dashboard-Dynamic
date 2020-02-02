// variable globale
var compteur = 0;

//fonction
function test(){
  console.log('ok');
}

function cancel_modif(widget_num) {
  $("#widget-content"+widget_num).empty();
  var form = '<div onclick="edit_widget('+widget_num+');"><ion-icon class="edit-button" name="ios-create"></ion-icon></div>';
  $("#widget-content"+widget_num).html(form);
}

function generate_plug(widget_num) {
  var choix = $("#widget-content"+widget_num).find(":selected").text();
  if (choix != "Choix du plugin") {
    var form = '<iframe src="https://discordapp.com/widget?id=650726819443769354&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>';
    $("#widget-content"+widget_num).html(form);
  } else {
    alert('Veuillez selectioner un plugin');
  }

}

function edit_widget(widget_num) {

  console.log($(this));

  $("#widget-content"+widget_num).empty();
  var form = ''+

  '<select class="form-control" id="exampleFormControlSelect1">'+
    '<option value="" disabled selected>Choix du plugin</option>'+
    '<option value="1">Discord</option>'+
    '<option value="2">Graph</option>'+
  '</select>'+
  '<br/>'+
   '<div onclick="generate_plug('+widget_num+')"><button class="btn btn-primary onclick="alert("ok");">Générer</button></div>'+
  '<br/>'+
  '<div onclick="cancel_modif('+widget_num+');"><button class="btn btn-primary">Annuler</button></div>';


  $("#widget-content"+widget_num).html(form);

}

function suppr_widget(widget_num) {

  $("#widget"+widget_num).remove();

}

// jquery
  $(function() {
    $(".grid-stack").gridstack({
      alwaysShowResizeHandle: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      ),
      resizable: {
        handles: "e, se, s, sw, w"
      },
      removable: "#trash",
      removeTimeout: 100,
      acceptWidgets: ".newWidget"
    });


    $("#newW").click(function() {

      compteur = compteur +1 ;
      var rand = Math.floor((Math.random() * 6) );
      var colors = ['green','red','blue','purple','orange','yellow'];
      var color = colors[rand];


      var grids = $(".grid-stack").data("gridstack");
      var content_widget = ''+
      '<div class="grid-stack-item grid-item" id="widget'+compteur+'" data-gs-x="0" data-gs-y="0" data-gs-width="5" data-gs-height="3">'+
        '<div class="grid-stack-item-content panel" style="z-index:1 !important">'+
          '<div class="widget-head panel-heading '+color+'">'+
            '<h3 class="panel-title">Widget '+compteur+'</h3><button class="suppr-head" onclick="suppr_widget('+compteur+');">X</button>'+
          '</div>'+
        '<div class="panel-body" id="widget-content'+compteur+'">'+
          '<div onclick="edit_widget('+compteur+');"><ion-icon class="edit-button" name="ios-create"></ion-icon></div>'+
        '</div>'+
      '</div>'+
      '</div>';

      var el = $.parseHTML(content_widget);

      grids.addWidget(el);
    });

    $("#lock").click(function() {
       var tab = $('.grid-stack').data('gridstack').grid.nodes;
       var grid = $('.grid-stack').data('gridstack');
       $.each( tab, function( key, value ) {
         grid.movable(value.el,false);
         grid.resizable(value.el,false);
      });
    });

    $("#unlock").click(function() {
       var tab = $('.grid-stack').data('gridstack').grid.nodes;
       var grid = $('.grid-stack').data('gridstack');
       $.each( tab, function( key, value ) {
         grid.movable(value.el,true);
         grid.resizable(value.el,true);
      });
    });

  });
