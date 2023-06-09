## EURECA-PRO STEM Innovation Contest 2023
## Team MWC22

## STEM Challenge 22
A drone with suitable sensor technology on board that could monitor the water quality of surface waters so that hazards can be detected in time.

Given by [Endress+Hauser EH](https://www.de.endress.com/de?wt_mc=paid-search.google.keyword.othr.de-brand.sc-germany.admedia&gad=1&gclid=CjwKCAjwl6OiBhA2EiwAuUwWZV75efmHGKmsGOK_1BNmxa9vt_WIKOXZXQtSlY9RPdTvKGHHTENJaRoCR7kQAvD_BwE)

## Proposal Reasoning
Due to industrial and environmental influences as well as the
advancing climate change, it is becoming increasingly important to
determine and monitor the water quality of surface. An advantage
compared to a self-contained watercraft would be that a drone
could independently cover distances over land to get to another
body of water or river branch.

## Innovative Aspects to be Valued
- Measure parameters of pH, dissolved oxygen and temperature
directly on site, without sampling.
- A timestamp as well as a GPS marker for each measurement is
useful.
- Able of water landing and have a minimum flight time of at
least 15 minutes per battery set, the distance of the remote
control should be at least 200 m. The data should be
transmitted directly live to an evaluation unit in a freely
convertible format and stored.

---

## Live Page
- to view current 
- automatic transfer to archive once day is over
- manual transfer to archive via button "Archive"

## ToDo
### Live View
- add quality to measurement (all values good -> green circle, one measurement value not good -> yellow circle, more than one value not good -> red circle)
- on button press "Map" show travelled distance of drone on map
- on button press "Analyse" input diagrams
- on button press "Safe" save as .xlsx
- on button press "Archive" change status -> data shown on Archive Page (status 1 -> live, status 0 -> archive)
- Event Listener Database Update -> if new entry was added to database -> update live view to show new entry

### Google Maps View Live View
- fixed positioning
- on click marker -> show values of pH, temp, date, time
- click on table entry -> go to marker in Google Map
- center initialized map at first measurement point

### Further Possible Improvements
- add Graphs

## References
- [How to Add Google Map in Larvael?](https://www.itsolutionstuff.com/post/how-to-add-google-map-in-laravelexample.html)
- [Get Lat Long from Address](https://www.latlong.net/convert-address-to-lat-long.html)

02.06.2023
- [Installation Laravel Excel](https://docs.laravel-excel.com/2.1/getting-started/)
- [Laravel 10 Import Export CSV and EXCEL File](https://techsolutionstuff.com/post/laravel-10-import-export-csv-and-excel-file)
- [Determine right version for compatibility with Laravel Excel](https://laracasts.com/discuss/channels/laravel/laravel-excel-not-working-1)
- [Correct Versions of maatwebsite/excel according to laravel version](https://laravelshift.com/can-i-upgrade-laravel/maatwebsite/excel)
- [Solution for 'Undefined type Maatwebsite\Excel\...'](https://stackoverflow.com/questions/71073100/undefined-type-maatwebsite-excel-concerns-tomodel)
- [Laravel Excel Export data in Excel, CSV & multiple sheet export](https://www.youtube.com/watch?v=VUet2wq22-o) 
