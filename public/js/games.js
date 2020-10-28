$(document).ready(function() {
	$('.btn-total').click(function (e) { 
		let tipe = $(this).attr('tipe');
		let dataTotalNumber = $(`#total-${tipe}`).val();
		let li = `<li data-number="${dataTotalNumber}">${dataTotalNumber}</li>`;
		$('#hasil_number').append(li);
		$(this).css('display', 'none');

		// sum number
		let listTotalNumber = Array.from($('[data-number]'));
		let jml = listTotalNumber.map(number => parseInt(number.dataset.number))
							.reduce((total, number) => {
								return total += number;
							});
		$('#hasil_total').text(jml);
	});

	$('.input-number').change(function (e) { 
		let dataNumber = parseInt($(this).val());
		let tipe = $(this).attr('tipe');
		let dataTotalNumber = $(`#total-${tipe}`).val() == "" ? 0 : parseInt($(`#total-${tipe}`).val());
		let newDataTotal = dataTotalNumber + dataNumber;

		$(`#total-${tipe}`).val(newDataTotal);
	});

    let coords2 = [
    // BARIS
        // ratusan
		[
			[0, 23], [1046, 23]
		],
		[
			[0, 50], [1046, 50]
        ],
        [
			[0, 77], [1046, 77]
        ],
        [
			[0, 104], [1046, 104]
        ],
        [
			[0, 131], [1046, 131]
        ],
        [
			[0, 158], [1046, 158]
        ],
        [
			[0, 185], [1046, 185]
        ],
        [
			[0, 212], [1046, 212]
        ],
        [
			[0, 239], [1046, 239]
        ],
        
        // puluhan
        [
			[0, 303], [1046, 303]
        ],
        [
			[0, 330], [1046, 330]
        ],
        [
			[0, 357], [1046, 357]
        ],
        [
			[0, 384], [1046, 384]
        ],
        [
			[0, 411], [1046, 411]
        ],
        [
			[0, 438], [1046, 438]
        ],
        [
			[0, 465], [1046, 465]
        ],
        [
			[0, 492], [1046, 492]
        ],
        [
			[0, 519], [1046, 519]
        ],

        // satuan
        [
			[0, 582], [1046, 582]
        ],
        [
			[0, 609], [1046, 609]
        ],
        [
			[0, 636], [1046, 636]
        ],
        [
			[0, 663], [1046, 663]
        ],
        [
			[0, 690], [1046, 690]
        ],
        [
			[0, 717], [1046, 717]
        ],
        [
			[0, 744], [1046, 744]
        ],
        [
			[0, 771], [1046, 771]
        ],
        [
			[0, 798], [1046, 798]
        ],


    // KOLOM
        // ratusan
		[
			[30, 0], [30, 839]
        ],
        [
			[60, 0], [60, 839]
        ],
        [
			[90, 0], [90, 839]
        ],
        [
			[120, 0], [120, 839]
        ],
        [
			[150, 0], [150, 839]
        ],
        [
			[180, 0], [180, 839]
        ],
        [
			[210, 0], [210, 839]
        ],
        [
			[240, 0], [240, 839]
        ],
        [
			[270, 0], [270, 839]
        ],

        // puluhan
        [
			[378, 0], [378, 839]
        ],
        [
			[408, 0], [408, 839]
        ],
        [
			[438, 0], [438, 839]
        ],
        [
			[468, 0], [468, 839]
        ],
        [
			[498, 0], [498, 839]
        ],
        [
			[528, 0], [528, 839]
        ],
        [
			[558, 0], [558, 839]
        ],
        [
			[588, 0], [588, 839]
        ],
        [
			[618, 0], [618, 839]
        ],

        // satuan
        [
			[729, 0], [729, 839]
        ],
        [
			[759, 0], [759, 839]
        ],
        [
			[789, 0], [789, 839]
        ],
        [
			[819, 0], [819, 839]
        ],
        [
			[849, 0], [849, 839]
        ],
        [
			[879, 0], [879, 839]
        ],
        [
			[909, 0], [909, 839]
        ],
        [
			[939, 0], [939, 839]
        ],
        [
			[969, 0], [969, 839]
        ],

	];

	for (var a = 0; a < coords2.length; a++) {
		for (var b = 0; b < coords2[a].length; b++){

			let css = {
				left: coords2[a][b][0]-6,
				top: coords2[a][b][1]-17,
			}

			class_active = (b == 0) ? ' first_dot' : ' last_dot';
		
			div = $('<div id="dot_container_'+a+'_'+b+'" parent_value="'+a+'" order_value="'+b+'" class="dot_container'+class_active+'"><div class="dot"></div></div>').css(css);
			
			$('#canvas').append(div);
		}	
	}

	$('.dot_container').click(function() {
		
		if ($(this).hasClass('first_dot')) {
			let parent = parseInt($(this).attr('parent_value'));
			let order = parseInt($(this).attr('order_value'));
			let dotId = `dot_container_${parent}_1`;		

			for (let c = 0; c < coords2[parent].length; c++){
				x1 = coords2[parent][c][0];
				y1 = coords2[parent][c][1];
				x2 = coords2[parent][c+1][0];
				y2 = coords2[parent][c+1][1];
				c = c + 1;

				var m = (y2-y1)/(x2-x1); //slope of the segment
				var angle = (Math.atan(m))*180/(Math.PI); //angle of the line
				var diameter = Math.sqrt(((x2-x1)*(x2-x1)) + ((y2-y1)*(y2-y1))); //length of the segment
				var transform;

				// the (css) transform angle depends on the direction of movement of the line
				if (x2 >= x1){
						transform = (360 + angle) % 360;
				} else {
						transform = 180 + angle;
				}

				// add the (currently invisible) line to the page
				var id ='line_'+new Date().getTime();
				var line = "<div id='"+id+"'class='line' dot_id="+dotId+">&nbsp;</div>";
				$('#canvas').append(line);
				
				//rotate the line
				$('#'+id).css({
					'left': x1,
					'top': y1,
					'width': '0px',
					'transform' : 'rotate('+transform+'deg)',
					'transform-origin' : '0px 0px',
					'-ms-transform' : 'rotate('+transform+'deg)',
					'-ms-transform-origin' : '0px 0px',
					'-moz-transform' : 'rotate('+transform+'deg)',
					'-moz-transform-origin' : '0px 0px',
					'-webkit-transform' : 'rotate('+transform+'deg)',
					'-webkit-transform-origin' : '0px 0px',
					'-o-transform' : 'rotate('+transform+'deg)',
					'-o-transform-origin' : '0px 0px'
				});

				// 'draw' the line
				$('#'+id).animate({
					width: diameter,
				}, 400, "linear");
			}
			
		} else {
			let dotLineId = $(this).attr('id')
			$(`.line[dot_id=${dotLineId}]`).css('display', 'none');
		}
	});
});