import { Component } from '@angular/core';

@Component({
    selector: 'app-header',
    template: `
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />

        <div class="topnav" id="myTopnav">
            <a href="#home" class="active my_font" id="title">ivarcode.net</a>
            <a href="#news" class="topnavel my_font">what i do </a>
            <a href="#contact" class="topnavel my_font">about me</a>
            <a href="#about" class="topnavel my_font">chess (external link)</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    `,
    styleUrls: ['./header.component.css']
})
export class HeaderComponent {
    constructor() {}
}
