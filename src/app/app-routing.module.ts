import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { WhatIDoComponent } from './components/what-i-do.component';

const appRoutes: Routes = [
    {
        component: WhatIDoComponent,
        path: 'what-i-do'
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
