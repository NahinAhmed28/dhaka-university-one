@extends('frontend.layouts.app')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endpush

    <!-- ======= Hero Section ======= -->
    @include('frontend.layouts.common.heroheader')
    <!-- End Hero -->

    <!-- Start #main -->
    <main id="main">


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class=" section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p class="pb-2">Room: 9050-52, 8th Floor, MBA Building <br>
                                        Faculty of Business Studies <br>
                                        <strong>University of Dhaka</strong>  </p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-2 " id="map" style='height:400px'></div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="{{route('public.contactStore')}}" method="post" role="form" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                           required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address" placeholder="address"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                      required></textarea>
                            </div>
                            @include('sweetalert::alert')
                            <div class="my-3">
                                <div class="text-center"><button type="submit" class="btn btn-warning">Send Message</button></div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @push('scripts')
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw3JG8x31XxAZ1XBO4Szy_OdDp8qCMs28&callback=initMap"></script>
        <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

        <script>

            function initMap() {
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 16,
                    center: { lat: 23.733860, lng: 90.392869 },
                });

                marker = new google.maps.Marker({
                    map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: { lat: 23.733860, lng: 90.392869 },
                });
                marker.addListener("click", toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            window.initMap = initMap;

        </script>


{{--        <script>--}}
{{--        //location map start--}}
{{--        var file_path = "{{asset('frontend/assets/marker/m1.png')}}";--}}
{{--        var style =[--}}
{{--        {--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#f5f5f5"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "elementType": "geometry.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "visibility": "on"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "elementType": "geometry.stroke",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "visibility": "on"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "elementType": "labels.icon",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "visibility": "on"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#616161"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "elementType": "labels.text.stroke",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#f5f5f5"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "administrative.country",--}}
{{--        "elementType": "geometry.stroke",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#808080"--}}
{{--        },--}}
{{--        {--}}
{{--        "visibility": "on"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "administrative.land_parcel",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#bdbdbd"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "poi",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#eeeeee"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "poi",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#757575"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "poi.park",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#e5e5e5"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "poi.park",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#9e9e9e"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "road",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#ffffff"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "road.arterial",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#757575"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "road.highway",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#dadada"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "road.highway",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#616161"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "road.local",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#9e9e9e"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "transit.line",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#e5e5e5"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "transit.station",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#eeeeee"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "water",--}}
{{--        "elementType": "geometry",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#c9c9c9"--}}
{{--        }--}}
{{--        ]--}}
{{--        },--}}
{{--        {--}}
{{--        "featureType": "water",--}}
{{--        "elementType": "labels.text.fill",--}}
{{--        "stylers": [--}}
{{--        {--}}
{{--        "color": "#9e9e9e"--}}
{{--        }--}}
{{--        ]--}}
{{--        }--}}
{{--        ];--}}

{{--        function initMap() {--}}
{{--        var map = new google.maps.Map(document.getElementById('map'), {--}}
{{--        center: {lat: 23.6850, lng: 90.3563},--}}
{{--        zoom: 6.8,--}}
{{--        styles: style,--}}
{{--        streetViewControl: false,--}}
{{--        zoomControl: true,--}}
{{--        fullscreenControl: true,--}}
{{--        });--}}

{{--        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';--}}

{{--        var markers = locations.map(function (location, i) {--}}
{{--        return new google.maps.Marker({--}}
{{--        position: location,--}}
{{--        label: labels[i % labels.length]--}}
{{--        });--}}
{{--        });--}}

{{--        var clusterStyles = [--}}
{{--        {--}}
{{--        textColor: 'white',--}}
{{--        url: file_path,--}}
{{--        height: 60,--}}
{{--        width: 60--}}
{{--        },--}}

{{--        ];--}}

{{--        var mcOptions = {--}}
{{--        gridSize: 60,--}}
{{--        styles: clusterStyles,--}}
{{--        maxZoom: 15--}}
{{--        };--}}
{{--        var markerCluster= new MarkerClusterer(map, markers, mcOptions);--}}

{{--        }--}}

{{--        const locations = [--}}
{{--        @foreach($locations as $location)--}}
{{--            {lat: -33.8669710, lng: 151.1958750,}--}}
{{--        @endforeach--}}
{{--        ];--}}
{{--        //location map end--}}

{{--        </script>--}}
  @endpush
@endsection
