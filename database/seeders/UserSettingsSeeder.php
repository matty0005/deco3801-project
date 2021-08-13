<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_settings')->delete();

        \DB::table('user_settings')->insert(array(
            array(
                "id" => 1,
                "user_id" => 1,
                "display_name" => "Test User",
                'type' => 1,
                "avatar" => 'data:image/jpeg;base64,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jADkDoK7Lw9LI+hWzNI7E7uSc/xGu2iebX3fqb+B6UmKIeYlJ5NPwPStzmGYFJgelPxSUwGYowPSn4FJQBFRUmB6UUCLuB6U2nU6kMbgelBAxTqgvP8AjxuP+ubfypgV9TYrpN4ykhhA5BHUfKa8h8SXVxJoFyj3ErKdmQzkg/MK6vWf+QHqH/XtJ/6Ca8ef7hrOTGV80oJz1oPSkqALFuT568+v8q17IBpiGAI296wV+9Whpn/Hy3+4f5ionHQ2pTs7G8kUZPMa/lVi3ghaQgxRnjuoqHTv+Phv9z+orZt/9YfpXO9D0I+8rkUFpbM5Bt4jx3QVK9lacf6LD/37FaNn/rj/ALtaCd6XMVynNPaWy4228Q+iCnRQxLnESD6KK6N+1MpXBxOfmATbsG3PXHFLDLIqECRxz2Y1tTfw1Tn++PpTJsUnmlz/AK1/++jVyyZnhJZiTu7miP7v41oWn+qP+9Us0SJ7MAwngfeqheuy3bgMQOOAfYVfrndU/wCQjL+H8hQDOf1m4mXVpwJpAPl4DH+6KuafqV/HYxql7cqozgLKwHU+9Zl//wAfsn4fyFZk3+tNdNN2PPr/AKnuvheaWfw7aySyPI535Z2JJ+du9bgHArzjwn/yLNp/wP8A9DavRbP/AI8oP+ua/wAq609DkH4HpSYHpT6SmBHijA9KkpKAI8D0op9FAFmkP3T9KWuR1L/kF3f/AFwf/wBBNJgdFef8eU//AFzb+VcRqv8AyB77/r3k/wDQTXF3P/HpN/uN/Kuab7p+lQ5ATP8A6tvoaoP900p6UypGRv8AdNRHpViT7hqs/wB00gBfvCpk61Vpw60Abekf8fb/APXM/wAxXT6X/wAfLf7h/mK4GP7x+laelf8AH03+4f5is5wvqb0qvK0rHpFr/rD9K0rf+L8K47Rf+Px/+uZ/mK6a1/j/AArmkrM9GnPmVzRaoZe1EfeiTtUmhA3aon61LJ2qu/3vwouTYkTpVqD7h+tUl6VKn3fxpMpD7j/WD6VzOpf8hCX8P5Ctm7/1o/3azZv9c1VEiZnjpXP6n/yEJfw/kK7WL/ViuN17/kNXH/Af/QRW1N6nJXXum7o3/IKg/wCBf+hGvZtI/wCQLYf9e8f/AKCK+d4P9Sv4/wA69V0r/kD2P/XvH/6CK6oM4megUlQ2f/Hjb/8AXNf5VY7VoSNpKkplMBtFLRQB/9kA/+EOoWh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNC40LjAtRXhpdjIiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOk
                Rlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczppcHRjRXh0PSJodHRwOi8vaXB0Yy5vcmcvc3RkL0lwdGM0eG1wRXh0LzIwMDgtMDItMjkvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6cGx1cz0iaHR0cDovL25zLnVzZXBsdXMub3JnL2xkZi94bXAvMS4wLyIgeG1sbnM6R0lNUD0iaHR0cDovL3d3dy5naW1wLm9yZy94bXAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0iZ2ltcDpkb2NpZDpnaW1wOjIxOGY1ZjI4LTBhNzMtNGUyNi1iM2YyLTc2NTVjYTc1YTFmMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo2MjU1ZDgxZS05OGM2LTRmOGYtOThiZC02NjExNTU4M2ExZjciIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozNDQxNzI5MC1lMDZmLTQ5MzMtYmQ3NS04NDNhMmQ4MDRmNjAiIEdJTVA6QVBJPSIyLjAiIEdJTVA6UGxhdGZvcm09IldpbmRvd3MiIEdJTVA6VGltZVN0YW1wPSIxNjI4Njg4MjIwNTAwMjU2IiBHSU1QOlZlcnNpb249IjIuMTAuMjIiIGRjOkZvcm1hdD0iaW1hZ2UvanBlZyIgeG1wOkNyZWF0b3JUb29sPSJHSU1QIDIuMTAiPiA8aXB0Y0V4dDpMb2NhdGlvbkNyZWF0ZWQ+IDxyZGY6QmFnLz4gPC9pcHRjRXh0OkxvY2F0aW9uQ3JlYXRlZD4gPGlwdGNFeHQ6TG9jYXRpb25TaG93bj4gPHJkZjpCYWcvPiA8L2lwdGNFeHQ6TG9jYXRpb25TaG93bj4gPGlwdGNFeHQ6QXJ0d29ya09yT2JqZWN0PiA8cmRmOkJhZy8+IDwvaXB0Y0V4dDpBcnR3b3JrT3JPYmplY3Q+IDxpcHRjRXh0OlJlZ2lzdHJ5SWQ+IDxyZGY6QmFnLz4gPC9pcHRjRXh0OlJlZ2lzdHJ5SWQ+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDpjaGFuZ2VkPSIvIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmI3NWFhZDZjLWJhNjQtNGUwYi05YjkzLTkyNDdiMjI3OThhMiIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iR2ltcCAyLjEwIChXaW5kb3dzKSIgc3RFdnQ6d2hlbj0iMjAyMS0wOC0xMVQyMzoyMzo0MCIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPHBsdXM6SW1hZ2VTdXBwbGllcj4gPHJkZjpTZXEvPiA8L3BsdXM6SW1hZ2VTdXBwbGllcj4gPHBsdXM6SW1hZ2VDcmVhdG9yPiA8cmRmOlNlcS8+IDwvcGx1czpJbWFnZUNyZWF0b3I+IDxwbHVzOkNvcHlyaWdodE93bmVyPiA8cmRmOlNlcS8+IDwvcGx1czpDb3B5cmlnaHRPd25lcj4gPHBsdXM6TGljZW5zb3I+IDxyZGY6U2VxLz4gPC9wbHVzOkxpY2Vuc29yPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
                ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8P3hwYWNrZXQgZW5kPSJ3Ij8+/+ICsElDQ19QUk9GSUxFAAEBAAACoGxjbXMEMAAAbW50clJHQiBYWVogB+UACAALAA0AFgAmYWNzcE1TRlQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPbWAAEAAAAA0y1sY21zAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANZGVzYwAAASAAAABAY3BydAAAAWAAAAA2d3RwdAAAAZgAAAAUY2hhZAAAAawAAAAsclhZWgAAAdgAAAAUYlhZWgAAAewAAAAUZ1hZWgAAAgAAAAAUclRSQwAAAhQAAAAgZ1RSQwAAAhQAAAAgYlRSQwAAAhQAAAAgY2hybQAAAjQAAAAkZG1uZAAAAlgAAAAkZG1kZAAAAnwAAAAkbWx1YwAAAAAAAAABAAAADGVuVVMAAAAkAAAAHABHAEkATQBQACAAYgB1AGkAbAB0AC0AaQBuACAAcwBSAEcAQm1sdWMAAAAAAAAAAQAAAAxlblVTAAAAGgAAABwAUAB1AGIAbABpAGMAIABEAG8AbQBhAGkAbgAAWFlaIAAAAAAAAPbWAAEAAAAA0y1zZjMyAAAAAAABDEIAAAXe///zJQAAB5MAAP2Q///7of///aIAAAPcAADAblhZWiAAAAAAAABvoAAAOPUAAAOQWFlaIAAAAAAAACSfAAAPhAAAtsRYWVogAAAAAAAAYpcAALeHAAAY2XBhcmEAAAAAAAMAAAACZmYAAPKnAAANWQAAE9AAAApbY2hybQAAAAAAAwAAAACj1wAAVHwAAEzNAACZmgAAJmcAAA9cbWx1YwAAAAAAAAABAAAADGVuVVMAAAAIAAAAHABHAEkATQBQbWx1YwAAAAAAAAABAAAADGVuVVMAAAAIAAAAHABzAFIARwBC/9sAQwANCQoLCggNCwoLDg4NDxMgFRMSEhMnHB4XIC4pMTAuKS0sMzpKPjM2RjcsLUBXQUZMTlJTUjI+WmFaUGBKUVJP/9sAQwEODg4TERMmFRUmTzUtNU9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09P/8IAEQgAIQAgAwERAAIRAQMRAf/EABcAAAMBAAAAAAAAAAAAAAAAAAIEBQP/xAAYAQADAQEAAAAAAAAAAAAAAAABAgMABP/aAAwDAQACEAMQAAABewON9Nl6xIhSXRoNrSTTJLlfUFusBwgJWgr1rc8FSCu8lW7c/wD/xAAiEAACAQMCBwAAAAAAAAAAAAABAgMABBETIRIiMTIzNEH/2gAIAQEAAQUC+RdHGwqQHgQUU5Y1IGNkxqyPSAhbmTSjETSsqhFUhlvPPa9zVZ+v/8QAHBEAAgICAwAAAAAAAAAAAAAAAAEQEQIhAyAx/9oACAEDAQE/ARLQ0OKKM1ULcN24Svpx+z//xAAZEQACAwEAAAAAAAAAAAAAAAAAAQIQIBH/2gAIAQIBAT8BGzosRwqbxKkf/8QAHhAAAgEEAwEAAAAAAAAAAAAAAAEhAhARMRIiQTL/2gAIAQEABj8CM3eD7eiKmibTtQcaZYs7IfZ6Oaqn0nwVS0xjsj//xAAfEAEAAgICAgMAAAAAAAAAAAABABEhMRChQVFxgZH/2gAIAQEAAT8hcJ9QiXthMOz4mQKrMMUQdhdx/HdZmQrY3R7lCEdTgC0l0yy9SIEWSzFzFo/ZqZL4PWmn3Owz/9oADAMBAAIAAwAAABCt4hWuvoVH7//EABsRAQEBAAMBAQAAAAAAAAAAAAEAERAhMUFR/9oACAEDAQE/EIiAncMYjH2aOOGdp/CbTjJpZhz6T5Pt/8QAGhEBAQEBAQEBAAAAAAAAAAAAAQARMRAhcf/aAAgBAgEBPxCRYQy0m3bZb4ifL9hhLlh23Xx7cRcX/8QAIhABAAICAQQCAwAAAAAAAAAAAQARITFBUWFxgRDwkaGx/9oACAEBAAE/EM50FmbjLbNUy6SE5yqlruC2LsNnsg2iEEzSii+j+ZXUxeRF+6bmxRStVfqEzoIymmFrcow125h0ZJyrqAT5iS/AgCX5a8Q
                JF+iredRSjLN7dszI4AT9c/nwm3wn1nWf/9k=',

                "created_at" => "2021-07-31 04:14:24",
                "updated_at" => "2021-07-31 04:14:24",
            ),
        ));
    }
}