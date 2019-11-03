	<div>
	@isset($CatName)
		@foreach ($CatName as $cat)
		    <p>Cat{{ $cat->name }}</p>
		@endforeach 
	@endisset

	@empty($CatName)
	В названиях категорий не искали
    @endempty
    </div>

	<div>
	@isset($PostTitle)
		@foreach ($PostTitle as $post)
		    <p>Cat{{ $post->title }}</p>
		@endforeach 
	@endisset

	@empty($PostTitle)
	В названиях постов поиска не было
    @endempty
    </div>

    	<div>
	@isset($PostBody)
		@foreach ($PostBody as $post)
		    <p>Cat{{ $post->title }}</p>
		@endforeach 
	@endisset

	@empty($CatName)
	В теле постов посика не было
    @endempty
    </div>	