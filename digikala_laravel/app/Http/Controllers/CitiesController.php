<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    public function get_all()
    {
        $cities = City::all();
        return view("admin.city.cities", [
            "cities" => $cities
        ]);
    }

    function add_get()
    {
        return view("admin.city.add_city");
    }
    function add_post()
    {
        $new_city = new City();
        $new_city->name = request("name");
        $new_city->save();
        return redirect("/admin/cities");
    }

    function edit_get()
    {
        $city_id = request("id");
        $city = City::find($city_id);
        return view("admin.city.edit_city", [
            "city" => $city
        ]);
    }
    function edit_post()
    {
        $city_id = request("id");
        $city = City::find($city_id);
        $city->name = request("name");
        $city->save();
        return redirect("/admin/cities");
    }

    function delete()
    {
        $city_id = request("id");
        $city = City::find($city_id);
        if (!$city) {
            $message = "city not found";
            $color = "success";
        } else {

            $city->delete();
            $message = "city deleted";
            $color = "danger";
        }
        return redirect("/admin/cities")->with([
            "message" => $message,
            "color" => $color
        ]);
    }
}
