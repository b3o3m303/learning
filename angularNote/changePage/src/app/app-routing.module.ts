import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { FirstPageComponent } from './first-page/first-page.component';
import { HomeComponent } from './home/home.component';
import { SecondComponent } from './second/second.component';
const routes: Routes = [
  {path:"",component:HomeComponent},
  {
    path: "firstPage", component: FirstPageComponent
  },
  { path: "second", component: SecondComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
