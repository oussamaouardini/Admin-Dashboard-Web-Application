@extends('layouts.product')
@section('content')
    <div class="az-content az-content-dashboard-two">
        <div class="az-header">
            <div class="container-fluid">
                <div class="az-header-left">
                    <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
                </div>
                <div class="az-header-center">
                    <input type="search" class="form-control" placeholder="Search for anything...">
                    <button class="btn"><i class="fas fa-search"></i></button>
                </div><!-- az-header-center -->
                <div class="az-header-right">
                    <div class="dropdown az-header-notification">
                        <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                        <div class="dropdown-menu">
                            <div class="az-dropdown-header mg-b-20 d-sm-none">
                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <h6 class="az-notification-title">Notifications</h6>
                            <p class="az-notification-text">You have 2 unread notification</p>
                            <div class="az-notification-list">
                                <!-- media -->
                                <div class="media">
                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                    <div class="media-body">
                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>
                                        <span>Fri 13 02:56 AM</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                                <div class="media">
                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                    <div class="media-body">
                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>
                                        <span>Fri 13 02:56 AM</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </div><!-- az-notification-list -->
                        </div><!-- dropdown-menu -->
                    </div><!-- az-header-notification -->
                    <div class="dropdown az-profile-menu">
                        <a href="" class="az-img-user"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>
                        <div class="dropdown-menu">
                            <div class="az-dropdown-header d-sm-none">
                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <div class="az-header-profile">
                                <div class="az-img-user">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                                </div><!-- az-img-user -->
                                <h6>Hamid Ouballa</h6>
                                <span>Bingo Admin</span>
                            </div><!-- az-header-profile -->


                            <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                            <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                            <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Fellow Admins</a>
                            <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Log Out</a>
                        </div><!-- dropdown-menu -->
                    </div>
                </div><!-- az-header-right -->
            </div><!-- container -->
        </div><!-- az-header -->
        <div class="az-content-header d-block d-md-flex" style="padding-bottom: 10px;">
            <div>
                <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
                <p class="mg-b-0">Your Product management dashboard.</p>
            </div>
        </div><!-- az-content-header -->
        <div class="az-content-body">

            <!-- your content goes here... -->

            <!-- content -->
            <div class="vd_content-section clearfix" id="ecommerce-product-add">
                <div class="row">
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <div class="form-wizard condensed mgbt-xs-20">
                            <ul class="nav nav-tabs nav flex-column">
                                <li class="active"><a href="#tabinfo" data-toggle="tab"> <i class="fa fa-info-circle append-icon"></i> Information </a></li>
                                <li><a href="#tabprice" data-toggle="tab"> <i class="fa fa-tag append-icon"></i> Prices </a></li>
                                <li><a href="#tabship" data-toggle="tab"> <i class="fa fa-truck append-icon"></i> Shipping</a></li>
                                <li><a href="#tabasso" data-toggle="tab"> <i class="fa fa-link append-icon"></i> Association </a></li>
                                <li><a href="#tabimage" data-toggle="tab"> <i class="fa fa-paperclip append-icon"></i> Images </a></li>
                                <li><a href="#tabquantities" data-toggle="tab"> <i class="fa fa-folder-open append-icon"></i> Quantities</a></li>
{{--                                <li><a href="#tabattach" data-toggle="tab"> <i class="fa fa-paperclip append-icon"></i> Attachment</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-8 col-lg-9 tab-right">
                        <div class="panel widget panel-bd-left light-widget">
                            <div class="panel-heading no-title"> </div>
                            <div  class="panel-body">
                                <div class="tab-content no-bd mgbt-xs-20">
                                    <div id="tabinfo" class="tab-pane active">
                                        <form class="form-horizontal">
                                            <div class="vd_panel-menu">
                                                <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a  data-toggle="modal" data-target="#myModal" class="btn btn-default btn-sm"><i class="fa fa-times append-icon"></i> Cancel Changes</a> </div>
                                            </div>
                                            <h3 class="mgtp-15 mgbt-xs-20"> Product Information</h3>
                                            <div class="form-group">
                                                <label  class="control-label col-lg-3" ><span data-toggle="tooltip" class="label-tooltip" data-original-title="Product type"> Type </span></label>
                                                <div class="col-lg-9">
                                                    <div class="vd_radio radio-success">
                                                        <input type="radio" checked=""  value="0" name="type_product" id="simple_product">
                                                        <label for="simple_product">Standard product</label>
                                                    </div>
                                                    <div class="vd_radio radio-success">
                                                        <input type="radio"  value="0" name="type_product" id="pack_product">
                                                        <label for="pack_product">Pack of product</label>
                                                    </div>
                                                    <div class="vd_radio radio-success">
                                                        <input type="radio"  value="2" name="type_product" id="virtual_product">
                                                        <label for="virtual_product">Virtual product (services, booking, downloadable products, etc.)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="name_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="The public name for this product. Invalid characters &lt;&gt;;=#{}"> Name </span> </label>
                                                <div class="col-lg-5">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-sm-9">
                                                            <input type="text" required value="Adidas U_Path Run" name="name_1" class="  updateCurrentText " id="name_1" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="code_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Product reference number (SKU-10423, etc.)"> Code </span> </label>
                                                <div class="col-lg-3">
                                                    <input type="text" required value="REF-0102392" name="code_1" class="  updateCurrentText " id="code_1" >
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="enable_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Enable product" > Enable </span> </label>
                                                <div class="col-lg-3">
                                                    <input id="enable_1" name="enable_1"  type="checkbox" data-rel="switch" data-wrapper-class="inverse" data-size="small" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"  checked>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="description_short_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Appears in the product list(s), and at the top of the product page."> Short description </span> </label>
                                                <div class="col-lg-8 mgbt-xs-10 mgbt-lg-0">
                                                    <textarea name="description_short_1" id="description_short_1" data-rel="ckeditor" rows="1" ></textarea>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="description_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Appears in the body of product detail."> Description </span> </label>
                                                <div class="col-lg-8 mgbt-xs-10 mgbt-lg-0">
                                                    <textarea name="description_1" id="description_1" data-rel="ckeditor" rows="1" ></textarea>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="tags_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Each tag has to be followed by a comma. The following characters are forbidden: !&lt;;&gt;;?=+#&quot;°{}_$%"> Tags </span> </label>
                                                <div class="col-lg-8 mgbt-xs-10 mgbt-lg-0">
                                                    <div class="row">
                                                        <div class="col-lg-9 mgbt-xs-10 mgbt-lg-0">
                                                            <input type="text" value="" name="tags_1"  id="tags_1" data-rel="tags-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                        </form>
                                    </div>
                                    <!-- #tabinfo -->
                                    <div id="tabprice" class="tab-pane">
                                        <div class="vd_panel-menu">
                                            <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancel Changes</a></div>
                                        </div>
                                        <h3 class="mgtp-15 mgbt-xs-20"> Product Price</h3>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="wholesale_price" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="The wholesale price is the price you paid for the product. Do not include the tax.">Wholesale price</span> </label>
                                                <div class="col-lg-2">
                                                    <div class="input-group"> <span class="input-group-addon">$ </span>
                                                        <input type="text" onchange="this.value = this.value.replace(/,/g, '.');" value="4.95" id="wholesale_price" name="wholesale_price" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="priceTE" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="The pre-tax retail price is the price for which you intend sell this product to your customers. It should be higher than the pre-tax wholesale price: the difference between the two will be your margin.">Retail price</span> </label>
                                                <div class="col-lg-2">
                                                    <div class="input-group "> <span class="input-group-addon">$ </span>
                                                        <input type="text"  value="16.51" name="price_displayed" id="priceTE" maxlength="14" size="11">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_tax_rules_group" class="control-label col-lg-3"> Tax rule </label>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <select id="id_tax_rules_group" name="id_tax_rules_group" onchange="javascript:calcPrice(); unitPriceWithTax('unit');">
                                                                <option value="0">No Tax</option>
                                                                <option value="2"> US-AK Rate (0%) </option>
                                                                <option selected="selected" value="1"> US-AL Rate (4%) </option>
                                                                <option value="4"> US-AR Rate (6%) </option>
                                                                <option value="3"> US-AZ Rate (6.6%) </option>
                                                                <option value="5"> US-CA Rate (8.25%) </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="unit_price" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="When selling a pack of items, you can indicate the unit price for each item of the pack. For instance, &quot;per bottle&quot; or &quot;per pound&quot;.">Unit price</span> </label>
                                                <div class="col-lg-4">
                                                    <div class="input-group"> <span class="input-group-addon">$ </span>
                                                        <input type="text" maxlength="14" value="0.00" name="unit_price" id="unit_price">
                                                        <span class="input-group-addon">per</span>
                                                        <input type="text" maxlength="10" value="" name="unity" id="unity">
                                                    </div>
                                                </div>
                                            </div>
                                            <br/>
                                        </form>
                                    </div>
                                    <!-- #tab-price -->
                                    <div id="tabship" class="tab-pane">
                                        <h3 class="mgtp-15 mgbt-xs-20"> Shipping</h3>
                                        <form class="form-horizontal">
                                            <div class="vd_panel-menu">
                                                <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancel Changes</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="width" class="control-label col-lg-3"> Package width</label>
                                                <div class=" col-lg-2">
                                                    <div class="input-group"> <span class="input-group-addon">in</span>
                                                        <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="width" id="width" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="height" class="control-label col-lg-3"> Package height</label>
                                                <div class="col-lg-2">
                                                    <div class="input-group"> <span class="input-group-addon">in</span>
                                                        <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="height" id="height" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="depth" class="control-label col-lg-3"> Package depth</label>
                                                <div class="col-lg-2">
                                                    <div class="input-group"> <span class="input-group-addon">in</span>
                                                        <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="depth" id="depth" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="weight" class="control-label col-lg-3"> Package weight</label>
                                                <div class="col-lg-2">
                                                    <div class="input-group"> <span class="input-group-addon">lb</span>
                                                        <input type="text" onkeyup="if (isArrowKey(event)) return ;this.value = this.value.replace(/,/g, '.');" value="0.000000" name="weight" id="weight" maxlength="14">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="weight" class="control-label col-lg-3">Carriers</label>
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="vd_checkbox checkbox-success">
                                                                <input type="checkbox" id="checkbox-1" value="Amana">
                                                                <label for="checkbox-1"> Amana </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="vd_checkbox checkbox-success">
                                                                <input type="checkbox" id="checkbox-3" value="Post">
                                                                <label for="checkbox-3"> Post </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#"> <i class="fa fa-plus append-icon"></i> Add Courier <i class="fa fa-external-link font-xs"></i></a> </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tabasso" class="tab-pane">
                                        <h3 class="mgtp-15 mgbt-xs-20"> Associations</h3>
                                        <form class="form-horizontal">
                                            <div class="vd_panel-menu">
                                                <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancel Changes</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="manufactures_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Product Manufactures"> Manufactures </span> </label>
                                                <div class="col-lg-8">
                                                    <div class="row mgbt-xs-0">
                                                        <div class="col-lg-5  mgbt-xs-10 mgbt-lg-0">
                                                            <select id="manufactures_1" name="manufactures_1">
                                                                <option value="Adidas"> Adidas </option>
                                                                <option value="Nike"> Nike </option>
                                                                <option selected="selected" value="Puma"> Puma </option>
                                                            </select>
                                                        </div>
                                                        <div  class="col-lg-5"> <a href="#"> <i class="fa fa-plus append-icon"></i> Add manufactures <i class="fa fa-external-link font-xs"></i></a> </div>
                                                        <!-- col-lg-9 -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group">
                                                <label  class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Product Categories"> Categories </span> </label>
                                                <div class="col-lg-5">
                                                    <div class="categories" data-rel="scroll" data-scrollheight="200" style="border-bottom:1px solid #CCCCCC;">
                                                        <ul class="vd_li" style="margin-left:-15px;">
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-cat-1" value="My Courier">
                                                                    <label for="checkbox-cat-1"> Men </label>
                                                                </div>
                                                                <ul class="vd_li">
                                                                    <li>
                                                                        <div class="vd_checkbox checkbox-success">
                                                                            <input type="checkbox" id="checkbox-cat-2" value="My Courier">
                                                                            <label for="checkbox-cat-2"> Jackets </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="vd_checkbox checkbox-success">
                                                                            <input type="checkbox" id="checkbox-cat-3" value="My Courier">
                                                                            <label for="checkbox-cat-3"> Boots </label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-cat-4" value="My Courier">
                                                                    <label for="checkbox-cat-4"> Women </label>
                                                                </div>
                                                                <ul class="vd_li">
                                                                    <li>
                                                                        <div class="vd_checkbox checkbox-success">
                                                                            <input type="checkbox" id="checkbox-cat-5" value="My Courier">
                                                                            <label for="checkbox-cat-5"> Underware </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="vd_checkbox checkbox-success">
                                                                            <input type="checkbox" id="checkbox-cat-9" value="My Courier">
                                                                            <label for="checkbox-cat-9"> Sweater </label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-cat-10" value="My Courier">
                                                                    <label for="checkbox-cat-10"> Kids </label>
                                                                </div>
                                                                <ul class="vd_li">
                                                                    <li>
                                                                        <div class="vd_checkbox checkbox-success">
                                                                            <input type="checkbox" id="checkbox-cat-11" value="My Courier">
                                                                            <label for="checkbox-cat-11"> Underware </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="vd_checkbox checkbox-success">
                                                                            <input type="checkbox" id="checkbox-cat-12" value="My Courier">
                                                                            <label for="checkbox-cat-12"> Sneakers </label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div  class="mgtp-10"> <a href="#"><i class="fa fa-plus append-icon"></i> Add Categories <i class="fa fa-external-link font-xs"></i></a> </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->
                                            <div class="form-group">
                                                <label for="related_1" class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Related products will be appeared on people also see this widget"> Related Products </span> </label>
                                                <div class="col-lg-5">
                                                    <div class="input-group mgbt-xs-10">
                                                        <input id="related_1" name="related_1" type="text" placeholder="Search">
                                                        <div class="input-group-btn">
                                                            <button class="btn vd_bg-blue vd_white" type="button"><i class="fa fa-search"></i></button>
                                                        </div>
                                                        <!-- /btn-group -->
                                                    </div>
                                                    <div class="categories" data-rel="scroll" data-scrollheight="200" style="border-bottom:1px solid #CCCCCC;">
                                                        <ul class="vd_li" style="margin-left:-15px;">
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-rel-1" value="My Courier">
                                                                    <label for="checkbox-rel-1"> Adidas Yeezy 350 Boost v2 Zebra </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-rel-2" value="My Courier">
                                                                    <label for="checkbox-rel-2">Adidas Cloudfoam Ultimate</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-rel-3" value="My Courier">
                                                                    <label for="checkbox-rel-3"> Adidas Yeezy 350 Boost v2 </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-rel-4" value="My Courier">
                                                                    <label for="checkbox-rel-4"> Pharrell Williams x Adidas Human Race NMD </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-rel-5" value="My Courier">
                                                                    <label for="checkbox-rel-5"> Adidas Sobakov </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="vd_checkbox checkbox-success">
                                                                    <input type="checkbox" id="checkbox-rel-6" value="My Courier">
                                                                    <label for="checkbox-rel-6"> Adidas U_Path Run </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- tab-pane -->
                                    <div id="tabimage" class="tab-pane">
                                        <h3 class="mgtp-15 mgbt-xs-20"> Images</h3>
                                        <form class="form-horizontal">
                                            <div class="vd_panel-menu">
                                                <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancel Changes</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3 file_upload_label"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Format JPG, GIF, PNG. Filesize 8.00 MB max."> Add a new image to this product </span> </label>
                                                <div class="col-lg-9"> <span class="btn vd_btn vd_bg-green fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
                                                        <!-- The file input field used as target for the file upload widget -->
                                  <input type="file" multiple name="files[]" id="fileupload">
                                  </span> <br>
                                                    <br>
                                                    <!-- The global progress bar -->
                                                    <div id="progress" class="progress">
                                                        <div class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                    <!-- The container for the uploaded files -->
                                                    <div id="files" class="files"></div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-3"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Invalid characters &lt;&gt;;=#{}"> Caption </span> </label>
                                                <div class="col-lg-9">
                                                    <div class="translatable-field row lang-1">
                                                        <div class="col-lg-6">
                                                            <input type="text" value="Faded Short Sleeve T-shirts" name="legend_1" id="legend_1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table  table-responsive-lg">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Image</th>
                                                    <th>Caption</th>
                                                    <th>Position</th>
                                                    <th>Cover</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr id="d1">
                                                    <td>1</td>
                                                    <td id="f1"><img src="{{asset('76423.jpg')}}" style="width: 50px;height: 50px" alt=""></td>
                                                    <td id="l1">Wick</td>
                                                    <td id="m1">Doe</td>
                                                    <td>
                                                        <div class="vd_radio radio-success">
                                                            <input type="radio" id="yes" name="optionyes" value="0" checked>
                                                            <label for="yes">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                                                </tr>
                                                <tr id="d1">
                                                    <td>1</td>
                                                    <td id="f1"><img src="{{asset('76423.jpg')}}" style="width: 50px;height: 50px" alt=""></td>
                                                    <td id="l1">Wick</td>
                                                    <td id="m1">Doe</td>
                                                    <td>
                                                        <div class="vd_radio radio-success">
                                                            <input type="radio" id="yes2" name="optionyes" value="1">
                                                            <label for="yes2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                                                </tr>
                                                <tr id="d1">
                                                    <td>1</td>
                                                    <td id="f1"><img src="{{asset('76423.jpg')}}" style="width: 50px;height: 50px" alt=""></td>
                                                    <td id="l1">Wick</td>
                                                    <td id="m1">Doe</td>
                                                    <td>
                                                        <div class="vd_radio radio-success">
                                                            <input type="radio" id="yes3" name="optionyes" value="2">
                                                            <label for="yes3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <!-- tab-pane -->

                                    <div id="tabquantities" class="tab-pane">
                                        <h3 class="mgtp-15 mgbt-xs-20"> Quantities</h3>
                                        <form class="form-horizontal">
                                            <div class="vd_panel-menu">
                                                <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancel Changes</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Small - Black </span> </label>
                                                <div class="col-lg-2">
                                                    <input type="number"  value="235" name="number_1" class=" " id="number_1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Small - Blue </span> </label>
                                                <div class="col-lg-2">
                                                    <input type="number"   value="102" name="number_2" class=" " id="number_2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Medium - Black </span> </label>
                                                <div class="col-lg-2">
                                                    <input type="number"  value="32" name="number_3" class=" " id="number_3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Medium - Blue </span> </label>
                                                <div class="col-lg-2">
                                                    <input type="number"   value="45" name="number_4" class=" " id="number_4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Large - Black </span> </label>
                                                <div class="col-lg-2">
                                                    <input type="number"  value="76" name="number_5" class=" " id="number_5">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="number_1" class="control-label col-lg-5"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Public title for the product's page, and for search engines. Leave blank to use the product name."> Tight Jeans - Large - Blue </span> </label>
                                                <div class="col-lg-2">
                                                    <input type="number"   value="12" name="number_6" class=" " id="number_6">
                                                </div>
                                            </div>
                                            <h3 class="mgtp-15 mgbt-xs-20"> Other Options</h3>
                                            <div class="form-group" id="when_out_of_stock">
                                                <label class="control-label col-lg-3">When out of stock</label>
                                                <div class="col-lg-9">
                                                    <div class="vd_radio radio-success">
                                                        <input checked="" value="0" name="out_of_stock_options" id="out_of_stock_1" type="radio">
                                                        <label for="out_of_stock_1">Deny orders</label>
                                                    </div>
                                                    <div class="vd_radio radio-success">
                                                        <input value="0" name="out_of_stock_options" id="out_of_stock_2" type="radio">
                                                        <label for="out_of_stock_2">Allow orders</label>
                                                    </div>
                                                    <div class="vd_radio radio-success">
                                                        <input value="2" name="out_of_stock_options" id="out_of_stock_3" type="radio">
                                                        <label for="out_of_stock_3">Default:Deny orders - <a href="#">as set in the Products Preferences page</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tabattach" class="tab-pane">
                                        <h3 class="mgtp-15 mgbt-xs-20"> Attachment</h3>
                                        <form class="form-horizontal">
                                            <div class="vd_panel-menu">
                                                <div> <a class="btn vd_btn vd_bg-blue btn-sm save-btn"><i class="fa fa-save append-icon"></i> Save Changes</a> <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-times append-icon"></i> Cancel Changes</a></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="attachment_name_1" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Maximum 32 characters."> <span class="vd_red">*</span> Filename </span> </label>
                                                <div class="col-lg-9">
                                                    <div class="translatable-field row mgbt-xs-0">
                                                        <div class="col-lg-9">
                                                            <input type="text" onblur="updateLinkRewrite();" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" value="" name="attachment_name_1" class=" " id="attachment_name_1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label for="attachment_name_2" class="control-label col-lg-3 required"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="File Description"> Description </span> </label>
                                                <div class="col-lg-9">
                                                    <div class="translatable-field row mgbt-xs-0">
                                                        <div class="col-lg-9">
                                                            <input type="text" onblur="updateLinkRewrite();" onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();" value="" name="attachment_name_2" class=" " id="attachment_name_2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="control-label col-lg-3 file_upload_label"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Format JPG, GIF, PNG. Filesize 8.00 MB max."> File </span> </label>
                                                <div class="col-lg-9"> <span class="btn vd_btn vd_bg-green fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
                                                        <!-- The file input field used as target for the file upload widget -->
                                  <input type="file" multiple name="files[]" id="fileupload2">
                                  </span> </div>
                                            </div>
                                            <!-- form-group -->

                                            <div class="form-group">
                                                <label class="control-label col-lg-3 file_upload_label"> <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Check to use which uploaded files you want to use"> Uploaded Files </span> </label>
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="vd_checkbox checkbox-success">
                                                                <input type="checkbox" id="attach-1" value="DHL" checked>
                                                                <label for="attach-1"> My_Things.zip </label>
                                                            </div>
                                                            <div class="vd_checkbox checkbox-success">
                                                                <input type="checkbox" id="attach-2" value="Fedex">
                                                                <label for="attach-2"> Second.zip </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="vd_checkbox checkbox-success">
                                                                <input type="checkbox" id="attach-3" value="My Courier">
                                                                <label for="attach-3"> Third.zip </label>
                                                            </div>
                                                            <div class="vd_checkbox checkbox-success">
                                                                <input type="checkbox" id="attach-4" value="Post">
                                                                <label for="attach-4"> Fourth.zip </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form-group -->

                                        </form>
                                    </div>
                                </div>
                                <!-- tab-content -->

                            </div>
                            <!-- panel-body -->

                            <!-- form-horizontal -->
                        </div>
                        <!-- Panel Widget -->
                    </div>
                    <!-- col-sm-12-->
                </div>
                <!-- row -->

            </div>
            <!-- content -->


            <!-- modal fade -->

            <!-- modal fade -->


            <!-- addPrice -->

            <!-- addPrice -->

            <!-- your content goes here -->

        </div><!-- az-content-body -->
        <div class="az-footer">
            <div class="container-fluid">
                <span>&copy; 2019 BingoDev.com</span>
                <span>Designed by: @3aitana</span>
            </div><!-- container -->
        </div><!-- az-footer -->
    </div>
    <script>
        $(document).ready(function(){
            $(".update").click(function(){
                var id = $(this).data("uid");
                var f1 = $("#f1").html();
                var l1 = $("#l1").html();
                var m1 = $("#m1").html();
                var f2 = $("#f2").html();
                var l2 = $("#l2").html();
                var m2 = $("#m2").html();
                if(id==1){
                    $("#fn").val(f1);
                    $("#mn").val(m1);
                    $("#ln").val(l1);
                }else if(id==2){
                    $("#fn").val(f2);
                    $("#mn").val(m2);
                    $("#ln").val(l2);
                }
                $("#up").click(function(){
                    if(id==1){
                        var fn = $("#fn").val();
                        var mn = $("#mn").val();
                        var ln = $("#ln").val();
                        $("#f1").html(fn);
                        $("#m1").html(mn);
                        $("#l1").html(ln);
                    }else if(id==2){
                        var fn = $("#fn").val();
                        var mn = $("#mn").val();
                        var ln = $("#ln").val();
                        $("#f2").html(fn);
                        $("#m2").html(mn);
                        $("#l2").html(ln);
                    }
                });
            });
            $(".delete").click(function(){
                var id = $(this).data("uid");
                $("#del").click(function(){
                    if(id==1){
                        $("#d1").html('');
                    }else if(id==2){
                        $("#d2").html('');
                    }
                });
            });
        });
    </script><!-- az-content -->
@endsection
