<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Listing;

class ListingController extends Controller
{

  private function get_listing_summaries()
  {
    $collection = Listing::all([
      'id', 'address', 'title', 'price_per_night'
    ]);
    $collection->transform(function($listing) {
      $listing->thumb = asset(
        'images/' . $listing->id . '/Image_1_thumb.jpg'
      );
      return $listing;
    });
    return collect(['listings' => $collection->toArray()]);
  }

  private function get_listing($listing)
  {
    $model = $listing->toArray();
    for($i = 1; $i <=4; $i++) {
      $model['image_' . $i] = asset(
        'images/' . $listing->id . '/Image_' . $i . '.jpg'
      );
    }
    return collect(['listing' => $model]);
  }

  private function add_meta_data($collection, $request)
  {
    return $collection->merge([
      'path' => $request->getPathInfo(),
      'auth' => Auth::check(),
      'saved' => Auth::check() ? Auth::user()->saved : []
    ]);
  }

  public function getApi(Listing $listing)
  {
    $data = $this->get_listing($listing);
    return response()->json($data);
  }

  public function getWeb(Listing $listing, Request $request)
  {
    $data = $this->get_listing($listing);
    $data = $this->add_meta_data($data, $request);
    return view('app', ['data' => $data]);
  }

  public function getHome(Request $request)
  {
      $data = $this->get_listing_summaries();
      $data = $this->add_meta_data($data, $request);
      return view('app', ['data' => $data]);
  }

  public function getHomeApi()
  {
    $data = $this->get_listing_summaries();
    return response()->json($data);
  }

  /*
    [
      "listings" => [
        0 => [
          "id" => 1,
          "address" => "...",
          "title" => "...",
          "price_per_night" => "...",
          "thumb" => "..."
        ]
        1 => [ ... ]
        ...
        29 => [ ... ]
      ]
    ]
  */
}
