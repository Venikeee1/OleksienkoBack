
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>
<h1><?php echo $page->error; ?></h1>
<div><?php echo $page->error404_description; ?></div>

	<div class="error-404" style="background-image: url('{{error404.mainBg}}')">
	    <div class="error-404__pict">
	        <img src="{{error404.errorText}}" alt="" class="error-404__img">
	    </div>
	    <div class="error-404__text">
	        <h1 class="error-404__title">{{error404.title}}</h1>
	        <h2 class="error-404__subtitle">{{error404.subtitle}}</h2>
	        <div class="error-404__description">
	            {{#each error404.description}}
	                <p>{{this}}</p>
	            {{/each}}
	        </div>
	    </div>
	</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_footer.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));
	