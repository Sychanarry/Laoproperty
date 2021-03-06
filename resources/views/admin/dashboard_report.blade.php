@extends('admin.index_master')
@section('content')
<div class="page-content">
    @include('admin.body.pagecontent')
          <main id="content" class="bg-gray-01">
            <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
              <div class="d-flex flex-wrap flex-md-nowrap mb-6">
                <div class="mr-0 mr-md-auto">
                  <h2 class="mb-0 text-heading fs-22 lh-15">My Report<span
                    class="badge badge-white badge-pill text-primary fs-18 font-weight-bold ml-2">5</span>
                  </h2>
                  <p>Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
                </div>
                <form class="form">
                  <div class="input-group input-group-lg bg-white border">
                    <div class="input-group-prepend">
                      <button class="btn pr-0 shadow-none" type="button"><i class="far fa-search"></i></button>
                    </div>
                    <input type="text" class="form-control bg-transparent border-0 shadow-none text-body"
                       placeholder="Search listing" name="search">
                  </div>
                </form>
              </div>
              <div class="table-responsive">
                <table class="table table-hover bg-white border rounded-lg">
                  <thead class="thead-sm thead-black">
                    <tr>
                      <th scope="col" class="border-top-0 px-6 pt-6 pb-3">Search</th>
                      <th scope="col" class="border-top-0 pt-6 pb-3">Type</th>
                      <th scope="col" class="border-top-0 pt-6 pb-3">Date Created</th>
                      <th scope="col" class="border-top-0 pt-6 pb-3">Action</th>
                      <th scope="col" class="border-top-0 pt-6 pb-3"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle p-6">
                        <a href="#"
                           class="text-heading fs-16 font-weight-500 lh-1625 hover-primary">Home in Metric Way</a>
                      </td>
                      <td class="align-middle">For Rent</td>
                      <td class="align-middle">30 December, 2019
                      </td>
                      <td class="align-middle"><a href="#"
                                                class="btn btn-sm bg-hover-light border fs-14 px-3">View
                          <span class="d-inline-block ml-1 text-primary "><i class="fal fa-eye"></i></span></a></td>
                      <td class="align-middle">
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary mr-5"><i
                                class="fal fa-pencil-alt"></i></a>
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary"><i
                                class="fal fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle p-6">
                        <a href="#"
                           class="text-heading fs-16 font-weight-500 lh-1625 hover-primary">Adorable Garden Gingerbread
                          House</a>
                      </td>
                      <td class="align-middle">For Rent</td>
                      <td class="align-middle">30 December, 2019
                      </td>
                      <td class="align-middle"><a href="#"
                                                class="btn btn-sm bg-hover-light border fs-14 px-3">View
                          <span class="d-inline-block ml-1 text-primary "><i class="fal fa-eye"></i></span></a></td>
                      <td class="align-middle">
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary mr-5"><i
                                class="fal fa-pencil-alt"></i></a>
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary"><i
                                class="fal fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle p-6">
                        <a href="#"
                           class="text-heading fs-16 font-weight-500 lh-1625 hover-primary">Home in Metric Way</a>
                      </td>
                      <td class="align-middle">For Rent</td>
                      <td class="align-middle">30 December, 2019
                      </td>
                      <td class="align-middle"><a href="#"
                                                class="btn btn-sm bg-hover-light border fs-14 px-3">View
                          <span class="d-inline-block ml-1 text-primary "><i class="fal fa-eye"></i></span></a></td>
                      <td class="align-middle">
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary mr-5"><i
                                class="fal fa-pencil-alt"></i></a>
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary"><i
                                class="fal fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle p-6">
                        <a href="#"
                           class="text-heading fs-16 font-weight-500 lh-1625 hover-primary">Adorable Garden Gingerbread
                          House</a>
                      </td>
                      <td class="align-middle">For Rent</td>
                      <td class="align-middle">30 December, 2019
                      </td>
                      <td class="align-middle"><a href="#"
                                                class="btn btn-sm bg-hover-light border fs-14 px-3">View
                          <span class="d-inline-block ml-1 text-primary "><i class="fal fa-eye"></i></span></a></td>
                      <td class="align-middle">
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary mr-5"><i
                                class="fal fa-pencil-alt"></i></a>
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary"><i
                                class="fal fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle p-6">
                        <a href="#"
                           class="text-heading fs-16 font-weight-500 lh-1625 hover-primary">Home in Metric Way</a>
                      </td>
                      <td class="align-middle">For Rent</td>
                      <td class="align-middle">30 December, 2019
                      </td>
                      <td class="align-middle"><a href="#"
                                                class="btn btn-sm bg-hover-light border fs-14 px-3">View
                          <span class="d-inline-block ml-1 text-primary "><i class="fal fa-eye"></i></span></a></td>
                      <td class="align-middle">
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary mr-5"><i
                                class="fal fa-pencil-alt"></i></a>
                        <a href="#" class="d-inline-block fs-18 text-muted hover-primary"><i
                                class="fal fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </main>
        </div>
        @endsection
