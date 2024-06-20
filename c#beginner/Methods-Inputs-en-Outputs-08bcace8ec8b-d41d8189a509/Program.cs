using System;

class Program
{
    static void Main(string[] args)
    {
        int[] zijden = {
            5,
            10,
            20
        };

        foreach (var zijde in zijden)
        {
            int oppervlakte = OppervlakteKubus(zijde);
            int volume = VolumeKubus(zijde, zijde, zijde);
            CombineerBerekeningen(zijde, oppervlakte, volume);
        }
    }

    // Voor de oppervlakte
    static int OppervlakteKubus(int zijde)
    {
        return 6 * zijde * zijde;
    }

    // Voor de volume
    static int VolumeKubus(int lengte, int breedte, int hoogte)
    {
        return lengte * breedte * hoogte;
    }

    // Combineren
    static void CombineerBerekeningen(int zijde, int oppervlakte, int volume)
    {
        Console.WriteLine($"Volume = {volume} en oppervlakte = {oppervlakte}");
    }
}
