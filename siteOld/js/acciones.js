$(document).ready(function(){
	



	

	$("#buscar").click(function()
		{var twit=$("#buscarTwit").val();
		buscarTwit(twit);
		});
	});

function aprobar(id)
	{$.ajax(
		{url : "acciones.php",
		type: "POST",
		dataType: "json",
		data : {
			id:id,
			accion:"aprobar"
		},
		success: function(data)
			{alert(data);
			location.reload();
			}
		});
	}

function eliminar(id)
	{$.ajax(
		{url : "acciones.php",
		type: "POST",
		dataType: "json",
		data : {
			id:id,
			accion:"eliminar"
		},
		success: function(data)
			{alert(data);
			location.reload();
			}
		});
	}

function cargarTwit()
	{$.ajax(
		{url : "acciones.php",
		type: "POST",
		dataType: "json",
		data : {
			accion:"cargarTwit"
		},
		success: function(data)
			{
				console.log(data);
				var posicion=array_rand(data);
				var contenido="<p>"+data[posicion].comentario+"</p>";
				$("#rotativo-tuits").html(contenido);
				//console.log(data[posicion]);
			}
		});
	}

function buscarTwit(twit)
	{$.ajax(
		{url : "acciones.php",
		type: "POST",
		dataType: "json",
		data : {
			twit:twit,
			accion:"buscarTwit"
		},
		success: function(data)
			{

				var posicion=array_rand(data);
				var contenido="<p>"+data[posicion].comentario+"</p>";
				$("#rotativo-tuits").html(contenido);
				//console.log(data[posicion]);
			}
		});
	}

function array_rand(input, num_req)
	{var indexes = [];
	var ticks = num_req || 1;
	var checkDuplicate = function(input, value) {
	var exist = false,
	index = 0,
	il = input.length;
	while (index < il)
		{if (input[index] === value)
			{exist = true;
			break;
			}
		index++;
		}
	return exist;
	};
	if (Object.prototype.toString.call(input) === '[object Array]' && ticks <= input.length)
		{while (true)
			{var rand = Math.floor((Math.random() * input.length));
			if (indexes.length === ticks)
				{break;
				}
			if (!checkDuplicate(indexes, rand))
				{indexes.push(rand);
				}
			}
		}
	else
		{indexes = null;
		}
	return ((ticks == 1) ? indexes.join() : indexes);
	}