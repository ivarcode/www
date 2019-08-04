import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { WhatIDoComponent } from './components/what-i-do.component';
import { AboutMeComponent } from './components/about-me.component';

const appRoutes: Routes = [
    {
        component: WhatIDoComponent,
        path: 'what-i-do'
    },
    {
        component: AboutMeComponent,
        path: 'about-me'
    },
    {
        redirectTo: '#',
        path: '**'
    }
];

@NgModule({
    exports: [RouterModule],
    imports: [RouterModule.forRoot(appRoutes)]
})
export class AppRoutingModule {}
