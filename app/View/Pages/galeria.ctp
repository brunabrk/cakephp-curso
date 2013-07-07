<div class="container">
	<h1 class="sombra">Conheça um pouco mais...</h1>
	<div id="container">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<?php echo $this->Html->image('1.jpg');?>
						<div class="caption" style="bottom:0">
							<p>Hotel</p>
						</div>
					</div>
					<div class="slide">
						<?php echo $this->Html->image('2.jpg');?>						
						<div class="caption">
							<p>Hotel</p>
						</div>
					</div>
					<div class="slide">
						<?php echo $this->Html->image('3.jpg');?>
						<div class="caption">
							<p>Hotel</p>
						</div>
					</div>
					<div class="slide">
						<?php echo $this->Html->image('4.jpg',array('style'=>'height: 100%;'));?>
						<div class="caption">
							<p>Porte de Galinhas</p>
						</div>
					</div>
					<div class="slide">
						<?php echo $this->Html->image('5.jpeg');?>
						<div class="caption">
							<p>Porto de Galinhas</p>
						</div>
					</div>
					<div class="slide">
						<?php echo $this->Html->image('6.jpg');?>
						<div class="caption">
							<p>Porto de Galinhas</p>
						</div>
					</div>

				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
		</div>
	</div>
</div>

<!-- Plugin slide - -->
<script>
	$(function(){
		$('#slides').slides({
			preload: true,
			preloadImage: 'img/loading.gif',
			play: 5000,
			pause: 2500,
			hoverPause: true,
			animationStart: function(current){
				$('.caption').animate({
					bottom:-35
				},100);
				if (window.console && console.log) {
					// example return of current slide number
					console.log('animationStart on slide: ', current);
				};
			},
			animationComplete: function(current){
				$('.caption').animate({
					bottom:0
				},200);
				if (window.console && console.log) {
					// example return of current slide number
					console.log('animationComplete on slide: ', current);
				};
			},
			slidesLoaded: function() {
				$('.caption').animate({
					bottom:0
				},200);
			}
		});
	});
</script>