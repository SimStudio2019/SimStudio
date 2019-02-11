var aside = $('#draggable');
var area = $('#droppable');
var schemas = $('.schema');

$(schemas).draggable({
	containment: area,
	helper: 'clone',
	scroll: false
});

$(area).droppable({
	drop: function(event, ui){
		var dropElem = ui.draggable;
		
		if(dropElem.hasClass('schema-fixed') == false){
			var idComponent		= dropElem.data('id');
			var nameComponent	= dropElem.data('name');
			var imgComponent	= dropElem.data('black');
			var xComponent		= ui.offset.left-120;
			var yComponent		= ui.offset.top-150;
			var params			= dropElem.data('param').split('|');
			
			var schema = new Schema({
				'id'	: idComponent,
				'name'	: nameComponent, 
				'img'	: imgComponent,
				'x'		: xComponent,
				'y'		: yComponent,
				'params': params
			});
		}
	}
});


$('.btn-save').on('click', saveSchemas);

$(schemas).tooltip()

function Schema(arg){
	var id		= arg.id;
	var name	= arg.name;
	var src		= arg.img;
	var x		= arg.x;
	var y		= arg.y;
	var params	= arg.params;
	
	this.id		= id
	this.name	= name
	this.comment= '';
	this.color	= 'noir';
	this.size	= 100;
	
	var nbparams	= params.length;
	
	var div = $('<div>', {
		'class' 	: 'schema schema-fixed',
		'id'		: id,
		'tabindex'	: 0
	});
/*	
	this.param = $('<div>', {
		'class'	: 'params card'
	});
	
	for(var i = 0; i < nbparams; i++){
		var rowParam = $('<div class="input-group"><label for="pa'+i+'">'+this.params[i]+'</label> <input type="text" value="" id="pa'+i+'" /></div>');
	
		this.param.append(rowParam);
	}
*/
	div.css("position", "absolute");
	div.css("top", y);
	div.css("left", x);
	div.css("background", 'url('+src+') no-repeat center center');
	div.css("background-size", '90%');
	
	div.removeAttr('id');
	
	div.data('id', id);
	div.data('name', name);
	
	div.on('focus', displayParams);

	/*
	this.div.on('blur', function(e){
		console.log(this);
		//$('.params').remove();
	});
	*/

	div.on('keyup', {'schema':div}, function(e){
		if(e.which == 46){
			e.data.schema.remove();
			//$('.params').remove();
		}
	});

	$(area).append(div);
			
	div.draggable({
		containment: area
	});

	div.resizable({
		containment: area,
		aspectRatio: 1,
		minWidth: 50,
		maxWidth: 300,
		minHeight: 50,
		maxHeight: 300,
		resize: function(event, ui){
			size = $(this).width();
			displayParams();
		}
	});
	
	$('.param-item').on('change', updateParam);
	
	function updateParam(){
		this.name = $('#param-name').val();
		this.comment = $('#param-comment').html();
		this.size = $('#param-size').val();
		this.color = $('#param-color').val();
	}
	
	function displayParams(){
		$('#param-name').val(this.name);
		$('#param-comment').html(this.comment);
		$('#param-size').val(this.size);
		$('#param-color').val(this.color);
	}
	
	return div;
}

function saveSchemas(){
	var schemas = $('.schema-fixed');
	var nbSchemas = schemas.length;
	
	var obj = new Array();
	
	for(var i = 0; i < nbSchemas; i++){
		var tmp = new Array();
		tmp['id']	= $(schemas[i]).data('id');
		tmp['name']	= $(schemas[i]).data('name');
		tmp['xPos']	= $(schemas[i]).offset().left;
		tmp['yPos']	= $(schemas[i]).offset().top;
		tmp['size']	= $(schemas[i]).css('width');
		
		obj.push(tmp);
	}
	
	console.log(JSON.stringify(obj));
}