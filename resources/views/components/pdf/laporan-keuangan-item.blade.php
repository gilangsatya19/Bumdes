<tr @style(['color: red' => $isNegative])>
    <td style="padding-left: 1rem">
        {{ $nama }}
    </td>
    <td style="text-align: right">
        <span>
            @if ($isNegative)
                <span>-</span>
            @endif
            Rp. {{ $nominal }}
        </span>
    </td>
</tr>
