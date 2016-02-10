?<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Card Action Buttons</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel='stylesheet prefetch' href='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.5/angular-material.css'>
    <link rel='stylesheet prefetch' href='https://material.angularjs.org/1.0.5/docs.css'>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
<div ng-controller="AppCtrl" layout="column" ng-cloak="" class="inputdemoErrors" ng-app="MyApp">
    <form name="cadastro">
        <div class="carddemoCardActionButtons" ng-app="MyApp">
            <md-content class="md-padding" layout-xs="column" layout="row" layout-align="center center">
                <div flex-xs="" flex-gt-xs="50" layout="column">
                    <md-card>
                        <md-card-title>
                            <md-card-title-text layout-align="center center">
                                <span class="md-headline">All In System</span>
                            </md-card-title-text>
                        </md-card-title>
                        <md-card-content>
                            <md-input-container class="md-block" flex-gt-sm>
                                <label>Nome Completo</label>
                                <input name="nome" ng-model="nome" required maxlength="100">

                                <div ng-messages="cadastro.nome.$error">
                                    <div ng-message="required">Este campo é obrigatório.</div>
                                    <div ng-message="md-maxlength">O Nome deve possuir no máximo 100 caracteres.</div>
                                </div>
                            </md-input-container>

                            <md-input-container class="md-block">
                                <label>E-mail</label>
                                <input md-maxlength="100" required name="email" type="email" ng-model="email">

                                <div ng-messages="cadastro.email.$error">
                                    <div ng-message="required">Este campo é obrigatório.</div>
                                    <div ng-message="md-maxlength">O E-mail deve possuir no máximo 100 caracteres.</div>
                                </div>
                            </md-input-container>

                            <md-input-container class="md-block">
                                <label>Username</label>
                                <input md-maxlength="45" required name="username" ng-model="username">

                                <div ng-messages="cadastro.username.$error">
                                    <div ng-message="required">Este campo é obrigatório.</div>
                                    <div ng-message="md-maxlength">O Username deve possuir no máximo 45 caracteres.</div>
                                </div>
                            </md-input-container>

                            <md-input-container class="md-block">
                                <label>Senha</label>
                                <input md-maxlength="128" required name="senha" type="password" ng-model="senha">

                                <div ng-messages="cadastro.senha.$error">
                                    <div ng-message="required">Este campo é obrigatório.</div>
                                    <div ng-message="md-maxlength">A Senha deve possuir no máximo 128 caracteres.</div>
                                </div>
                            </md-input-container>

                            <md-input-container class="md-block">
                                <label>Confirmação de Senha</label>
                                <input md-maxlength="128" required name="confirmacao" type="password" ng-model="confirmacao">

                                <div ng-messages="cadastro.confirmacao.$error">
                                    <div ng-message="required">Este campo é obrigatório.</div>
                                    <div ng-message="md-maxlength">A Confirmação de Senha deve possuir no máximo 128 caracteres.</div>
                                </div>
                            </md-input-container>

                        </md-card-content>
                        <md-card-actions layout="row" layout-align="center center">
                            <md-button class="md-raised md-primary">Cadastrar</md-button>
                        </md-card-actions>
                    </md-card>
                </div>
            </md-content>
        </div>
    </form>
</div>

<!--
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be in foundin the LICENSE file at http://material.angularjs.org/license.
-->
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js'></script>
<script src='http://ngmaterial.assets.s3.amazonaws.com/svg-assets-cache.js'></script>
<script src='https://cdn.gitcdn.xyz/cdn/angular/bower-material/v1.0.5/angular-material.js'></script>

<script src="../js/cadastro.js"></script>


</body>
</html>
