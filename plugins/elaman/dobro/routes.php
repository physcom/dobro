<?php
	
	Route::post('post/upvote-post', 'Elaman\Dobro\Controllers\Posts@upVotePost');
	Route::post('post/downvote-post', 'Elaman\Dobro\Controllers\Posts@downVotePost');
	Route::post('post/increase-share-post', 'Elaman\Dobro\Controllers\Posts@increaseShareCount');
	Route::post('post/approve-help', 'Elaman\Dobro\Controllers\Posts@approveHelp');