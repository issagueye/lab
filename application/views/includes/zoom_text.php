<div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">Zoom <span class="m-l-5"><i
                                    class="fa fa-cog"></i></span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"onclick="resizeText(1)">Augmenter +</a>
                                <a class="dropdown-item"onclick="resizeText(-1)">Diminuer</a>
                             
                            </div>

                        </div>






<script>function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.0em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}

$("plustext").addEvent("click", function() {resizeText(1);});
$("minustext").addEvent("click", function() {resizeText(-1);});

</script>