@extends('header')
{{-- @section('title')
{{ $articles->titre}}
@endsection --}}

@section('title')
<title>
    {{ $articles->titre}}
    
</title>

@endsection
@section('content')
<link rel="stylesheet" href="./detail.css">
</head>
<body>
<!-- partial:index.partial.html -->
<main class="responsive-wrapper">
	<div class="page-title">
		<h1>Latest Updates</h1>
	</div>
	<div class="magazine-layout">
		<div class="magazine-column">
			<article class="article">
				<h2 class="article-title article-title--large">
					<a href="#" class="article-link">The First Signs of <mark class="mark mark--primary">Alcoholic Liver</mark> Damage Are Not in the Liver</a>
				</h2>
				<div class="article-excerpt">
					<p>The combination of my father's death and my personal back ground lit a fire in me to know more</p>
					<p>He was admitted to the hospital on June 24, 2016.
				</div>
				<div class="article-author">
					<div class="article-author-img">
						<img src="https://assets.codepen.io/285131/author-3.png" />
					</div>
					<div class="article-author-info">
						<dl>
							<dt>David Sherof</dt>
							<dd>Reporter</dd>
						</dl>
					</div>
				</div>
			</article>
			<article class="article">
				<h2 class="article-title article-title--medium">
					<a href="#" class="article-link">The Founder's Guide to Actually Understanding Users Nowadays</a>
				</h2>
				<div class="article-creditation">
					<p>By Johnathan O'Connell, Andrew Van Dam, Aaron Gregg and Alyssa Fowers</p>
				</div>
			</article>
		</div>
		<div class="magazine-column">
			<article class="article" >
				<figure class="article-img">
					<img  src="{{$articles->photo}}" />
				</figure>
				<h2 class="article-title article-title--medium">
					<a href="#" class="article-link">How 7 Lines of Code Turned Into a $36 Billion Empire</a>
				</h2>
				<div class="article-excerpt">
					<p>Yeah, it's safe to say these guys have a great sense of humor, which isn't really suprising for us considering their seemingly absurd solution to online payments. Instead of chasing 1000-hour programming contracts to build clunky payments solutions for each individual client, the Collison...</p>
					<p>Yeah, it's safe to say these guys have a great sense of humor, which isn't really suprising for us considering their seemingly absurd solution to online payments. Instead of chasing 1000-hour programming contracts to build clunky payments solutions for each individual client, the Collison...</p>
				</div>
				<div class="article-author">
					<div class="article-author-img">
						<img src="https://assets.codepen.io/285131/author-2.png" />
					</div>
					<div class="article-author-info">
						<dl>
							<dt>James Robert</dt>
							<dd>Editor</dd>
						</dl>
					</div>
				</div>
			</article>
		</div>
		
		
	</div>
</main>
<!-- partial -->
  
</body>
</html>
@endsection
