<style>
    .skill-table {
        padding: 0.25rem;
    }

    .pagination {
        align-self: flex-end;
        padding-right: 1rem;
    }
</style>

<table class="table table-bordered mb-0">
    <thead>
    <style>
        th, td {
            text-align: center;
        }
    </style>
    <th></th>
    <th><img src="/img/skills/overall.gif" alt="Overall"></th>
    <th><img src="/img/skills/attack.gif" alt="Attack"></th>
    <th><img src="/img/skills/defence.gif" alt="Defence"></th>
    <th><img src="/img/skills/strength.gif"></th>
    <th><img src="/img/skills/hitpoints.gif"></th>
    <th><img src="/img/skills/ranged.gif"></th>
    <th><img src="/img/skills/prayer.gif"></th>
    <th><img src="/img/skills/magic.gif"></th>
    <th><img src="/img/skills/cooking.gif"></th>
    <th><img src="/img/skills/woodcutting.gif"></th>
    <th><img src="/img/skills/fletching.gif"></th>
    <th><img src="/img/skills/fishing.gif"></th>
    <th><img src="/img/skills/firemaking.gif"></th>
    <th><img src="/img/skills/crafting.gif"></th>
    <th><img src="/img/skills/smithing.gif"></th>
    <th><img src="/img/skills/mining.gif"></th>
    <th><img src="/img/skills/herblore.gif"></th>
    <th><img src="/img/skills/agility.gif"></th>
    <th><img src="/img/skills/thieving.gif"></th>
    <th><img src="/img/skills/slayer.gif"></th>
    <th><img src="/img/skills/farming.gif"></th>
    <th><img src="/img/skills/runecrafting.gif"></th>
    <th><img src="/img/skills/hunter.gif"></th>
    <th><img src="/img/skills/construction.gif"></th>
    <th><img src="/img/skills/ehp.gif" alt="Overall"></th>
    </thead>
    <tbody>
    @foreach ($charsLast5 as $highscore)
        <tr>
            <td class="skill-table" scoped='row'>{{$highscore->Character_Name}}</td>
            <td class="skill-table" scoped='row'>{{$highscore->Overall_XP}}</td>
            <td class="skill-table">{{ getLevel($highscore->Attack_XP)  }}</td>
            <td class="skill-table">{{ getLevel($highscore->Defence_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Strength_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Hitpoints_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Ranged_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Prayer_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Magic_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Cooking_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Woodcutting_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Fletching_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Fishing_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Firemaking_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Crafting_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Smithing_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Mining_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Herblore_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Agility_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Thieving_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Slayer_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Farming_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Runecrafting_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Hunter_XP) }}</td>
            <td class="skill-table">{{ getLevel($highscore->Construction_XP) }}</td>
            <td class="skill-table">{{$highscore->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

