@extends('layouts.app')
@section('content')
    <div class="az-content az-content-dashboard-two">
{{--        <div class="az-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="az-header-left">--}}
{{--                    <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>--}}
{{--                </div>--}}
{{--                <div class="az-header-center">--}}
{{--                    <input type="search" class="form-control" placeholder="Search for anything...">--}}
{{--                    <button class="btn"><i class="fas fa-search"></i></button>--}}
{{--                </div><!-- az-header-center -->--}}
{{--                <div class="az-header-right">--}}
{{--                    <div class="dropdown az-header-notification">--}}
{{--                        <a href="" class="new"><i class="typcn typcn-bell"></i></a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <div class="az-dropdown-header mg-b-20 d-sm-none">--}}
{{--                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>--}}
{{--                            </div>--}}
{{--                            <h6 class="az-notification-title">Notifications</h6>--}}
{{--                            <p class="az-notification-text">You have 2 unread notification</p>--}}
{{--                            <div class="az-notification-list">--}}
{{--                                <!-- media -->--}}
{{--                                <div class="media">--}}
{{--                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>--}}
{{--                                        <span>Fri 13 02:56 AM</span>--}}
{{--                                    </div><!-- media-body -->--}}
{{--                                </div><!-- media -->--}}
{{--                                <div class="media">--}}
{{--                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>--}}
{{--                                        <span>Fri 13 02:56 AM</span>--}}
{{--                                    </div><!-- media-body -->--}}
{{--                                </div><!-- media -->--}}
{{--                            </div><!-- az-notification-list -->--}}
{{--                        </div><!-- dropdown-menu -->--}}
{{--                    </div><!-- az-header-notification -->--}}
{{--                    <div class="dropdown az-profile-menu">--}}
{{--                        <a href="" class="az-img-user"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <div class="az-dropdown-header d-sm-none">--}}
{{--                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>--}}
{{--                            </div>--}}
{{--                            <div class="az-header-profile">--}}
{{--                                <div class="az-img-user">--}}
{{--                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />--}}
{{--                                </div><!-- az-img-user -->--}}
{{--                                <h6>Hamid Ouballa</h6>--}}
{{--                                <span>Bingo Admin</span>--}}
{{--                            </div><!-- az-header-profile -->--}}


{{--                            <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>--}}
{{--                            <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>--}}
{{--                            <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Fellow Admins</a>--}}
{{--                            <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Log Out</a>--}}
{{--                        </div><!-- dropdown-menu -->--}}
{{--                    </div>--}}
{{--                </div><!-- az-header-right -->--}}
{{--            </div><!-- container -->--}}
{{--        </div><!-- az-header -->--}}
        <div class="az-content-header d-block d-md-flex" style="padding-bottom: 10px;">
            <div>
                <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
                <p class="mg-b-0">Your Help Desk Monitoring Dashboard.</p>
            </div>
        </div><!-- az-content-header -->
        <div class="az-content-body">
            <div class="row row-sm">
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body card-dashboard-fifteen">
                        <h1>257</h1>
                        <label class="tx-purple">Support Requests</label>
                        <span>The total number of support requests that have come in.</span>
                        <div class="chart-wrapper">
                            <div id="flotChart1" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card card-body card-dashboard-fifteen">
                        <h1>187</h1>
                        <label class="tx-primary">Complaints Received</label>
                        <span>The total number of complaints that have been received.</span>
                        <div class="chart-wrapper">
                            <div id="flotChart2" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-20 mg-lg-t-0">
                    <div class="card card-body card-dashboard-fifteen">
                        <h1>125<span>/187</span></h1>
                        <label class="tx-teal">Complaints Resolved</label>
                        <span>The total number of complaints that resolved.</span>
                        <div class="chart-wrapper">
                            <div id="flotChart3" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-6 col-lg-12 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="d-lg-flex d-xl-block">
                        <div class="card wd-lg-50p wd-xl-auto">
                            <div class="card-header">
                                <h6 class="card-title tx-14 mg-b-0">Time to Resolve Complaint</h6>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <h3 class="tx-bold tx-inverse lh--5 mg-b-15">7m:32s <span class="tx-base tx-normal tx-gray-600">/ Goal: 8m:0s</span></h3>
                                <div class="progress mg-b-0 ht-3">
                                    <div class="progress-bar wd-85p bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- card-body -->
                        </div><!-- card -->
                        <div class="card mg-t-20 mg-lg-t-0 mg-xl-t-20 mg-lg-l-20 mg-xl-l-0">
                            <div class="card-header">
                                <h6 class="card-title tx-14 mg-b-5">Avg. Speed of Answer</h6>
                                <p class="tx-12 lh-4 tx-gray-500 mg-b-0">Measure how quickly support staff answer incoming messages.</p>
                            </div><!-- card-header -->
                            <div class="card-body">
                                <h2 class="tx-bold tx-inverse lh--5 mg-b-5">20m:20s</h2>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div>
                </div><!-- col-3 -->
                <div class="col-xl-6 mg-t-15 mg-t-20">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title tx-14 mg-b-5">Customer Satisfaction</h6>
                        </div><!-- card-header -->
                        <div class="card-body row pd-25">
                            <div class="col-sm-8 col-md-7">
                                <div id="flotPie" class="wd-100p ht-200"></div>
                            </div><!-- col -->
                            <div class="col-sm-4 col-md-5 mg-t-30 mg-sm-t-0">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center"><span class="d-inline-block wd-10 ht-10 bg-purple mg-r-10"></span> Very Satisfied (26%)</li>
                                    <li class="d-flex align-items-center mg-t-5"><span class="d-inline-block wd-10 ht-10 bg-primary mg-r-10"></span> Satisfied (39%)</li>
                                    <li class="d-flex align-items-center mg-t-5"><span class="d-inline-block wd-10 ht-10 bg-teal mg-r-10"></span> Not Satisfied (20%)</li>
                                    <li class="d-flex align-items-center mg-t-5"><span class="d-inline-block wd-10 ht-10 bg-gray-500 mg-r-10"></span> Satisfied (15%)</li>
                                </ul>
                            </div><!-- col -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-gl-5 col-xl-6 mg-t-20">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title tx-14 mg-b-5">Talk Time</h6>
                        </div><!-- card-header -->
                        <div class="table-responsive mg-t-15">
                            <table class="table table-striped table-talk-time">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Call Agent</th>
                                    <th>Talk Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>21</td>
                                    <td>Oussama Ouardini</td>
                                    <td>2m:12s</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Mohamed Ouballa</td>
                                    <td>1m:17s</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Oussama Ouardini</td>
                                    <td>2m:0s</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Mohamed Ouballa</td>
                                    <td>2m:1s</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Oussama Ouardini</td>
                                    <td>2m:21s</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Mohamed Ouballa</td>
                                    <td>2m:33s</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-md-5 col-lg-5 col-xl-4 mg-t-20">
                    <div class="card card-dashboard-sixteen">
                        <div class="card-header">
                            <h6 class="card-title tx-14 mg-b-0">Top Performer Help Agents</h6>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mg-b-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">Oussama Ouardini</h6>
                                            <small class="tx-11 tx-gray-500">Agent ID: 12022</small>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">87/100</h6>
                                            <small class="tx-11 tx-gray-500">Reached Goal</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">Mohamed Ouballa</h6>
                                            <small class="tx-11 tx-gray-500">Agent ID: 12028</small>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">85/100</h6>
                                            <small class="tx-11 tx-gray-500">Reached Goal</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">Oussama Ouardini</h6>
                                            <small class="tx-11 tx-gray-500">Agent ID: 11500</small>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">83/100</h6>
                                            <small class="tx-11 tx-gray-500">Reached Goal</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">Mohamed Ouballa</h6>
                                            <small class="tx-11 tx-gray-500">Agent ID: 11600</small>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">82/100</h6>
                                            <small class="tx-11 tx-gray-500">Reached Goal</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">Oussama Ouardini</h6>
                                            <small class="tx-11 tx-gray-500">Agent ID: 11990</small>
                                        </td>
                                        <td>
                                            <h6 class="mg-b-0 tx-inverse">80/100</h6>
                                            <small class="tx-11 tx-gray-500">Reached Goal</small>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-md-7 col-lg-7 col-xl-8 mg-t-20">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title tx-14 mg-b-5">Customer Complaints Comparison</h6>
                            <p class="mg-b-0">Monitor the total number of complaints that are resolved and unresolved.</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="dashboard-five-stacked-chart"><canvas id="chartStacked1"></canvas></div>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- az-content-body -->
        <div class="az-footer">
            <div class="container-fluid">
                <span>&copy; 2019 BingoDev.com</span>
                <span>Designed by: @3aitana</span>
            </div><!-- container -->
        </div><!-- az-footer -->
    </div><!-- az-content -->
@endsection

@section('script')
    <script>
        $(function(){
            'use strict'

            $('.az-sidebar .with-sub').on('click', function(e){
                e.preventDefault();
                $(this).parent().toggleClass('show');
                $(this).parent().siblings().removeClass('show');
            })

            $(document).on('click touchstart', function(e){
                e.stopPropagation();

                // closing of sidebar menu when clicking outside of it
                if(!$(e.target).closest('.az-header-menu-icon').length) {
                    var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                    if(!sidebarTarg) {
                        $('body').removeClass('az-sidebar-show');
                    }
                }
            });



            /* ----------------------------------- */
            /* Dashboard content */

            $.plot('#flotChart1', [{
                data: flotSampleData5,
                color: '#8039f4'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0 }, { opacity: 0.12 } ] }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 10,
                    markings: [{ color: '#70737c', lineWidth: 1, font: {color: '#000'}, xaxis: { from: 75, to: 75} }]
                },
                yaxis: { show: false },
                xaxis: {
                    show: true,
                    position: 'top',
                    color: 'rgba(102,16,242,.1)',
                    reserveSpace: false,
                    ticks: [[15,'1h'],[35,'1d'],[55,'1w'],[75,'1m'],[95,'3m'], [115,'1y']],
                    font: {
                        size: 10,
                        weight: '500',
                        family: 'Roboto, sans-serif',
                        color: '#999'
                    }
                }
            });

            $.plot('#flotChart2', [{
                data: flotSampleData2,
                color: '#007bff'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0 }, { opacity: 0.5 } ] }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 10,
                    markings: [{ color: '#70737c', lineWidth: 1, font: {color: '#000'}, xaxis: { from: 75, to: 75} }]
                },
                yaxis: { show: false },
                xaxis: {
                    show: true,
                    position: 'top',
                    color: 'rgba(102,16,242,.1)',
                    reserveSpace: false,
                    ticks: [[15,'1h'],[35,'1d'],[55,'1w'],[75,'1m'],[95,'3m'], [115,'1y']],
                    font: {
                        size: 10,
                        weight: '500',
                        family: 'Roboto, sans-serif',
                        color: '#999'
                    }
                }
            });

            $.plot('#flotChart3', [{
                data: flotSampleData5,
                color: '#00cccc'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.5 } ] }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 10,
                    markings: [{ color: '#70737c', lineWidth: 1, font: {color: '#000'}, xaxis: { from: 75, to: 75} }]
                },
                yaxis: { show: false },
                xaxis: {
                    show: true,
                    position: 'top',
                    color: 'rgba(102,16,242,.1)',
                    reserveSpace: false,
                    ticks: [[15,'1h'],[35,'1d'],[55,'1w'],[75,'1m'],[95,'3m'], [115,'1y']],
                    font: {
                        size: 10,
                        weight: '500',
                        family: 'Roboto, sans-serif',
                        color: '#999'
                    }
                }
            });

            $.plot('#flotPie', [
                { label: 'Very Satisfied', data: [[1,25]], color: '#6f42c1'},
                { label: 'Satisfied', data: [[1,38]], color: '#007bff'},
                { label: 'Not Satisfied', data: [[1,20]], color: '#00cccc'},
                { label: 'Very Unsatisfied', data: [[1,15]], color: '#969dab'}
            ], {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.5,
                        label: {
                            show: true,
                            radius: 3/4,
                            formatter: labelFormatter
                        }
                    }
                },
                legend: { show: false }
            });

            function labelFormatter(label, series) {
                return '<div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">' + Math.round(series.percent) + '%</div>';
            }

            var ctx6 = document.getElementById('chartStacked1');
            new Chart(ctx6, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        data: [10, 24, 20, 25, 35, 50, 20, 30, 28, 33, 45, 65],
                        backgroundColor: '#6610f2',
                        borderWidth: 1,
                        fill: true
                    },{
                        data: [20, 30, 28, 33, 45, 65, 25, 35, 50, 20, 30, 28],
                        backgroundColor: '#00cccc',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true,
                                fontSize: 11
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.4,
                            ticks: {
                                fontSize: 11
                            }
                        }]
                    }
                }
            });
        });
    </script>
@endsection
