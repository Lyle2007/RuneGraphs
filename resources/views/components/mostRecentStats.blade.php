<div class="card-header">Current: {{$char->Character_Name}}</div>
<table style="margin:5px;">
    <tbody>
    <tr>
        <td><img src="/img/skills/attack.gif" class="skill_icon"></td>
        <td>{{number_format($char->Attack_XP)}}       </td>
        <td> {{getLevel($char->Attack_XP)}}       </td>
    </tr>
    <tr>
        <td><img src="/img/skills/defence.gif" class="skill_icon"></td>
        <td>{{number_format($char->Defence_XP)}}      </td>
        <td> {{getLevel($char->Defence_XP)}}      </td>
    </tr>
    <tr>
        <td><img src="/img/skills/strength.gif" class="skill_icon"></td>
        <td>{{number_format($char->Strength_XP)}}     </td>
        <td> {{getLevel($char->Strength_XP)}}     </td>
    </tr>
    <tr>
        <td><img src="/img/skills/hitpoints.gif" class="skill_icon"></td>
        <td>{{number_format($char->Hitpoints_XP)}}    </td>
        <td> {{getLevel($char->Hitpoints_XP)}}    </td>
    </tr>
    <tr>
        <td><img src="/img/skills/ranged.gif" class="skill_icon"></td>
        <td>{{number_format($char->Ranged_XP)}}       </td>
        <td> {{getLevel($char->Ranged_XP)}}       </td>
    </tr>
    <tr>
        <td><img src="/img/skills/prayer.gif" class="skill_icon"></td>
        <td>{{number_format($char->Prayer_XP)}}       </td>
        <td> {{getLevel($char->Prayer_XP)}}       </td>
    </tr>
    <tr>
        <td><img src="/img/skills/magic.gif" class="skill_icon"></td>
        <td>{{number_format($char->Magic_XP)}}        </td>
        <td> {{getLevel($char->Magic_XP)}}        </td>
    </tr>
    <tr>
        <td><img src="/img/skills/cooking.gif" class="skill_icon"></td>
        <td>{{number_format($char->Cooking_XP)}}      </td>
        <td> {{getLevel($char->Cooking_XP)}}      </td>
    </tr>
    <tr>
        <td><img src="/img/skills/woodcutting.gif" class="skill_icon"></td>
        <td>{{number_format($char->Woodcutting_XP)}}  </td>
        <td> {{getLevel($char->Woodcutting_XP)}}  </td>
    </tr>
    <tr>
        <td><img src="/img/skills/fletching.gif" class="skill_icon"></td>
        <td>{{number_format($char->Fletching_XP)}}    </td>
        <td> {{getLevel($char->Fletching_XP)}}    </td>
    </tr>
    <tr>
        <td><img src="/img/skills/fishing.gif" class="skill_icon"></td>
        <td>{{number_format($char->Fishing_XP)}}      </td>
        <td> {{getLevel($char->Fishing_XP)}}      </td>
    </tr>
    <tr>
        <td><img src="/img/skills/firemaking.gif" class="skill_icon"></td>
        <td>{{number_format($char->Firemaking_XP)}}   </td>
        <td> {{getLevel($char->Firemaking_XP)}}   </td>
    </tr>
    <tr>
        <td><img src="/img/skills/crafting.gif" class="skill_icon"></td>
        <td>{{number_format($char->Crafting_XP)}}     </td>
        <td> {{getLevel($char->Crafting_XP)}}     </td>
    </tr>
    <tr>
        <td><img src="/img/skills/smithing.gif" class="skill_icon"></td>
        <td>{{number_format($char->Smithing_XP)}}     </td>
        <td> {{getLevel($char->Smithing_XP)}}     </td>
    </tr>
    <tr>
        <td><img src="/img/skills/mining.gif" class="skill_icon"></td>
        <td>{{number_format($char->Mining_XP)}}       </td>
        <td> {{getLevel($char->Mining_XP)}}       </td>
    </tr>
    <tr>
        <td><img src="/img/skills/herblore.gif" class="skill_icon"></td>
        <td>{{number_format($char->Herblore_XP)}}     </td>
        <td> {{getLevel($char->Herblore_XP)}}     </td>
    </tr>
    <tr>
        <td><img src="/img/skills/agility.gif" class="skill_icon"></td>
        <td>{{number_format($char->Agility_XP)}}      </td>
        <td> {{getLevel($char->Agility_XP)}}      </td>
    </tr>
    <tr>
        <td><img src="/img/skills/thieving.gif" class="skill_icon"></td>
        <td>{{number_format($char->Thieving_XP)}}     </td>
        <td> {{getLevel($char->Thieving_XP)}}     </td>
    </tr>
    <tr>
        <td><img src="/img/skills/slayer.gif" class="skill_icon"></td>
        <td>{{number_format($char->Slayer_XP)}}       </td>
        <td> {{getLevel($char->Slayer_XP)}}       </td>
    </tr>
    <tr>
        <td><img src="/img/skills/farming.gif" class="skill_icon"></td>
        <td>{{number_format($char->Farming_XP)}}      </td>
        <td> {{getLevel($char->Farming_XP)}}      </td>
    </tr>
    <tr>
        <td><img src="/img/skills/runecrafting.gif" class="skill_icon"></td>
        <td>{{number_format($char->Runecrafting_XP)}} </td>
        <td> {{getLevel($char->Runecrafting_XP)}} </td>
    </tr>
    <tr>
        <td><img src="/img/skills/hunter.gif" class="skill_icon"></td>
        <td>{{number_format($char->Hunter_XP)}}       </td>
        <td> {{getLevel($char->Hunter_XP)}}       </td>
    </tr>
    <tr>
        <td><img src="/img/skills/construction.gif" class="skill_icon"></td>
        <td>{{number_format($char->Construction_XP)}} </td>
        <td> {{getLevel($char->Construction_XP)}} </td>
    </tr>
    </tbody>
</table>
</div>
</div>
