import { Injectable } from '@angular/core';
import{ Post } from '../post';
import {Http, Headers} from '@angular/http';
import { map } from 'rxjs/operators';

//import { POSTS } from '../mock.post';

@Injectable()
export class PostService{
	constructor(private _http:Http){

	}

	getPosts(){
		return this._http.get('https://jsonplaceholder.typicode.com/posts?_limit=5').pipe(map(res => res.json()));
	}

	addPost(post:any){
		var headers = new Headers();
		headers.append('Content-Type', 'application/json');
		return this._http.post('https://jsonplaceholder.typicode.com/posts', post, {headers: headers}).pipe(map(res => res.json()));
	}
}


