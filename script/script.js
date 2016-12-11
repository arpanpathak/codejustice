
 $(function(){ 
 	var code=CodeMirror.fromTextArea(document.getElementById("code"),{
		mode: "text/x-c++src",
		smartIndent:true,
		activeStyleLine:true,
		lineNumbers:true,
		matchBrackets: true,
    	styleActiveLine: true,
    	indentUnit: 4,
        indentWithTabs: true,
        autoCloseTags: true,
        autoCloseBrackets: true,
    	theme: "default"
		});
 	code.refresh();
 	$('#check').click(function()
    	{ 
    		$('#load').html('<img src="css/load.gif" style="margin: 0 auto; height: 50px; width: 50px;">');
    		$('#output').html("");
    		if($('#ide').prop("checked"))
    		{
    			$.post("check.php",{ check: 'check',
    							 teamname: $('#teamname').val(),
    							 codefile: $('#codefile').val(),
    							 code: code.getValue(),
    							 language: $('#language').val(),
    							 tle: $('#tle').val(),
								 input: $('#custom_input').val() },
    				function(data)
    				{
    					$('#load').html("");
    					$('#output').html(data);
    				}

    			);
    		}
    		else
    		{
	    		$.post("codejudge.php",{ check: 'check',
	    							 teamname: $('#teamname').val(),
	    							 codefile: $('#codefile').val(),
	    							 code: code.getValue(),
	    							 maincode: $('#maincode').val(),
	    							 language: $('#language').val(),
	    							 tle: $('#tle').val(),
	    							 ipfile: $('#ipfile').val(),
	    							 opfile: $('#opfile').val() },
	    				function(data)
	    				{
	    					$('#load').html("");
	    					$('#output').html(data);
	    				}

	    			);
    		}
    	});
  $('#select').on('change',function(){
  	var input = document.getElementById("select");
    var theme = input.options[input.selectedIndex].textContent;
    code.setOption("theme", theme);
  });
  $('.plang-theme').on('change',function(){
		var l=$(this).val();
		
		if(l=="java")
			code.setOption("mode","text/x-java");
		else if(l=="cpp")
			code.setOption("mode","text/x-c++src");
		else if(l=="python2" || l=="python3")
			code.setOption("mode","python");
		else if(l=="ruby")
			code.setOption("mode","text/x-ruby");
	});
  $('button').on('click',function(){
  		$($(this).attr('data-show')).show('explode');
  	})
  $('#ide').on('click',function(){
  		if($(this).prop("checked"))
  		{
  			$('#custom_input').show();
  		}
  		else 
  			$('#custom_input').hide();

  	});
 });

function hasItem(item){
	return $("body").has(item).length;
}
