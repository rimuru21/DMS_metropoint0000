
$(document).ready(function(){
    $('#type').on('change', function() {
      if ( this.value == '1')
      {
        $("#t_admin").show();
      }
      else
      {
        $("#t_admin").hide();
      }
    });
});
$(document).ready(function(){
    $('#type').on('change', function() {
      if ( this.value == '2')
      {
        $("#admin").show();
      }
      else
      {
        $("#admin").hide();
      }
    });
});
$(document).ready(function(){
    $('#type').on('change', function() {
      if ( this.value == '3')
      {
        $("#opt").show();
      }
      else
      {
        $("#opt").hide();
      }
    });
});

$(document).ready(function(){
    $('#type').on('change', function() {
      if ( this.value == '4')
      {
        $("#b_dri").show();
      }
      else
      {
        $("#b_dri").hide();
      }
    });
});
$(document).ready(function(){
    $('#type').on('change', function() {
      if ( this.value == '5')
      {
        $("#b_att").show();
      }
      else
      {
        $("#b_att").hide();
      }
    });
});

document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

function getDate(){
  var today = new Date();

document.getElementById("que_date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}
