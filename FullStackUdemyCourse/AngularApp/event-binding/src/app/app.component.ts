import { Component } from '@angular/core';
import { PostService } from './services/host.service';
import{ Post } from './post';

@Component({
  selector: 'app-root',
  template: `
  	<div class="container">
  	<h1 class="text-center display-4">My Blog</h1><br>
  	<form (submit)="addPost()" class="card bg-light p-3">
  		<input [(ngModel)]="title" name="title" type="text" class="form-control" placeholder="Post Title"><br>
  		<textarea class="form-control" [(ngModel)]="body" name="body" placeholder="Post body"></textarea><br>
  		<input type="submit" class="btn btn-primary btn-block" value="Submit">
  	</form><br>
  	<div>
  		<div class="panel" *ngFor = "let post of posts">
  			<h3>{{post.title}}</h3>
  			<p class="text-muted">{{post.body}}</p>
  		</div>
  	</div>
  	</div>
  `,
  providers: [PostService]
})
export class AppComponent {
	posts:Post[];
	title: string;
	body: string;

	constructor(private _postService:PostService){
		this._postService.getPosts().subscribe(posts => {
			this.posts = posts;
		});
	}

	addPost(){
		var newPost = {
			title: this.title,
			body: this.body
		}

		this._postService.addPost(newPost).subscribe(post => {
			this.posts.push(post);
		});
		return false;
	}
}

