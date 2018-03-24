<!DOCTYPE html>
<html lang="en">
	<head>
	  	<meta charset="UTF-8">
	  	<title>Scoped CSS Variables and JS</title>
	</head>
	<body>
	  	<h2>Update CSS Variables with <span class='hl'>JS</span></h2>

	  	<div class="controls">
	    	<label for="spacing">Spacing:</label>
	    	<input id="spacing" type="range" name="spacing" min="10" max="200" value="10" data-sizing="px">

	    	<label for="blur">Blur:</label>
	    	<input id="blur" type="range" name="blur" min="0" max="25" value="10" data-sizing="px">

	    	<label for="base">BackGround Color</label>
	    	<input id="base" type="color" name="base" value="#ffc600">
	  	</div>

	  	<img src="https://nerdreactor.com/wp-content/uploads/2018/03/atari-vcs-800x500.jpg">

	  	<style>
		    /*
		      misc styles, nothing to do with CSS variables
		    */

		    :root{
		    	--base : #ffc600;
		    	--spacing: 10px;
		    	--blur: 10px;
		    }



		    img{
		    	padding: var(--spacing);
		    	background: var(--base);
		    	filter: blur(var(--blur));
		    	/*The filter property defines visual effects (like blur and saturation) to an element (often <img>).*/
		    }

		    .hl{
		    	color: var(--base);
		    }

		    body {
		      text-align: center;
		      background: #193549;
		      color: white;
		      font-family: 'helvetica neue', sans-serif;
		      font-weight: 100;
		      font-size: 50px;
		    }

		    .controls {
		      margin-bottom: 50px;
		    }

		    input {
		      width:100px;
		    }
	  	</style>

	  	<script>
	  		const inputs = document.querySelectorAll('.controls input');
	  		function handleUpdate(){
	  			// console.log(this.value);
	  			const suffix = this.dataset.sizing || '';
	  			document.documentElement.style.setProperty(`--${this.name}`,this.value+suffix);

	  		}

	  		inputs.forEach( input => input.addEventListener('change',handleUpdate));
	  		inputs.forEach( input => input.addEventListener('mousemove',handleUpdate));

	  	</script>

	</body>
</html>
