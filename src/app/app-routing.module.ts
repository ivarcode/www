import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TitleComponent } from './components/title.component';

const appRoutes: Routes = [
    {
        component: TitleComponent,
        path: 'title'
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
