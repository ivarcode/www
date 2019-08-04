import { Component } from '@angular/core';

@Component({
    selector: 'app-about-me',
    template: `
        <br />
        <br />
        <br />
        <h1 class="my_font">About Me</h1>
        <hr />
        <h4 class="my_second_font">{{ aboutMeBlurb }}</h4>
        <br />
    `
})
export class AboutMeComponent {
    aboutMeBlurb = ``;
}
