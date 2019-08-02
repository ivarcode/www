import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { AppRoutingModule } from './app-routing.module';
import { TitleComponent } from './components/title.component';
import { HeaderComponent } from './components/header.component';
import { FooterComponent } from './components/footer.component';

@NgModule({
    declarations: [
        AppComponent,
        TitleComponent,
        HeaderComponent,
        FooterComponent
    ],
    imports: [BrowserModule, AppRoutingModule],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule {}
