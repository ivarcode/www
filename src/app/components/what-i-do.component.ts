import { Component } from '@angular/core';

@Component({
    selector: 'app-what-i-do',
    template: `
        <br />
        <br />
        <br />
        <h1 class="my_font">What I Do</h1>
        <hr />
        <h4 class="my_second_font">{{ whatIDoBlurb }}</h4>
        <br />
        <div class="row">
            <div class="col-sm-9">
                <h3 class="my_second_font">
                    Tech Support at the
                    <a
                        href="https://www.conncoll.edu/information-services/technology-services/it-service-desk/"
                        >IT Service Desk</a
                    >
                    at Connecticut College
                </h3>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    Diagnose and repair any problems that students, faculty, and
                    staff have with any device
                </h4>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    Work directly with full-time IT Staff to address unusual
                    problems
                </h4>
            </div>
            <div class="col-sm-3">
                <img
                    src="../assets/img/Servers_BackCables1.jpg"
                    style="width: 100%;"
                />
            </div>
        </div>
        <!-- chess -->
        <div class="row">
            <div class="col-sm-3">
                <img
                    src="../assets/img/Knight-chess.jpg"
                    style="width: 100%;"
                />
            </div>
            <div class="col-sm-9">
                <h3 class="my_second_font">
                    Player, Competitor &amp; Teacher
                </h3>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    Tournament Competition with the
                    <a href="https://new.uschess.org/home/"
                        >US Chess Federation</a
                    >
                    - my rating and stats
                    <a href="http://www.uschess.org/msa/MbrDtlMain.php?13599730"
                        >here</a
                    >
                </h4>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    Online pretty much daily at
                    <a href="https://en.lichess.org">lichess.org</a> - here is a
                    link to
                    <a href="https://en.lichess.org/@/ivarcode">my profile</a>
                </h4>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    Tutor anyone who wants to learn more about the game -
                    contact me if you're interested!
                </h4>
            </div>
        </div>
        <br />
        <h1 class="my_font">Projects</h1>
        <hr />
        <br />
        <!-- ngx-keyboard-shortcuts -->
        <div class="row">
            <div class="col-sm-9">
                <h3 class="my_second_font">
                    released v1.0.0 of the npm package:
                    <a
                        href="https://www.npmjs.com/package/ngx-keyboard-shortcuts"
                        >ngx-keyboard-shortcuts</a
                    >
                </h3>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    {{ ngxKeyboardShortcutsBlurb }}
                </h4>
            </div>
            <div class="col-sm-3">
                <img src="../assets/img/node-npm.jpg" style="width: 100%;" />
            </div>
        </div>
        <br />
        <!-- schackmatt.net -->
        <div class="row">
            <div class="col-sm-3">
                <img src="../assets/img/html-code.jpg" style="width: 100%;" />
            </div>
            <div class="col-sm-9">
                <h3 class="my_second_font">
                    chess website:
                    <a href="http://schackmatt.net">schackmatt.net</a>
                </h3>
                <h4 style="margin-left: 5%;" class="my_second_font">
                    {{ schackmattBlurb }}
                </h4>
            </div>
        </div>
        <br />
    `
})
export class WhatIDoComponent {
    whatIDoBlurb = `I have experience programming using all of (but not limited to) the following
    languages: HTML, CSS, Javascript, Typescript (Angular framework), Java, C++, PHP and SQL.  I
    play chess in my free time online, tutor kids and adults, and play at a competitive level in
    USCF tournaments.`;
    ngxKeyboardShortcutsBlurb = `This package allows developers to create and implement custom
    keybinding events in angular applications.  Developed while working with an intern team at
    Miles Technologies during the summer of 2019.`;
    schackmattBlurb = `Long-time pet project developed as a tool for chess players to learn and
    grow.  All game logic written in Javascript (original version: 2016)`;
}
