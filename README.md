1. Kas ir API? 
API ir kopums, lai dažadas programmas varētu savstarpēji komunicēt.
2. Kā deklarēt mainīgo PHP valodā?
Lai deklarētu mainīgo PHP valodā, jaizmanto $ simbolu, kas norāda, ka ir jāizmanto mainīgais.
3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Izmanto MVC arhintecturu. 
3.1 Model atbild par datu pārvaldību un to loģiku.
3.2 View ir lietotaja sakarsne
3.3 Controller ir starpnieks starp Model un View
4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM ļauj pārvaldīt datubāzes ierakstus kā objektus programmēšanas valodā. Tā virtā, lai rakstītu tīru SQL, ORM ļauj strādāt ar datiem kā ar parastiem objektiem, un īpašībam.
5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra
$users = User::where('rating', '>',  4)->get();"
